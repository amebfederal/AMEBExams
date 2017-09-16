<?php namespace App\Modules\Services\AccountHolder;

use App\Mail\AccountHolderRegistered;
use App\Modules\Models\AccountHolder;
use App\Modules\Services\Service;
use Illuminate\Support\Facades\Mail;

class AccountHolderService extends Service
{
    protected $account;

    public function __construct(AccountHolder $account)
    {
        $this->account = $account;
    }

    /**
     * Create new AccountHolder
     *
     * @param array $data
     * @return AccountHolder|null
     */
    public function create(array $data)
    {
//        try {
        $chosenState = $data['chosen_state'];
        if($chosenState == 'others'){
            $data['country_id'] = $data['state_id'];
            unset($data['state_id']);
        }
        $data['password'] = bcrypt($data['password']);
        $account = $this->account->create($data);

        // now send a verification link
        return $account;
//        } catch (Exception $e) {
//            return null;
//        }

    }
    /**
     * Paginate all AccountHolder
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 1;

        return $this->account->paginate($filter['limit']);
    }

    /**
     * Get all AccountHolders
     *
     * @return Collection
     */
    public function all()
    {
        return $this->account->all();
    }

    /**
     * Get a AccountHolder
     *
     * @param $accountId
     * @return AccountHolder|null
     */
    public function find($accountId)
    {
        try {
            return $this->account->find($accountId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the AccountHolder
     * @param $accountId
     * @param array $data
     * @return bool
     */
    public function update($accountId, array $data)
    {
        try {
            $user = $this->account->find($accountId);

            if ($user->update($data)) {
                return true;
            }

        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a AccountHolder
     *
     * @param Id
     * @return bool
     */
    public function delete($accountId)
    {
        try {
            $account = $this->account->find($accountId);
            //unset the files uploaded first

            return $account->delete();

        } catch (Exception $e) {
            return false;
        }
    }


}