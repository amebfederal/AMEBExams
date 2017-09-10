<?php namespace App\Modules\Services\Login;

use App\Http\Controllers\Superadmin\AdminSetting\AdminSettingController;
use App\Modules\Models\User;
use App\Modules\Services\Service;

class AccountHolderService extends Service
{
    protected $login;

    public function __construct(User $login){
        $this->login = $login;
    }

    /**
     * Create new AccountHolder
     *
     * @param array $data
     * @return AccountHolder|null
     */
    public function create(array $data)
    {
        try {
            $account = $this->account->create($data);

            //now assign account holder to state
            $state = $data['state'];
            foreach($state as $states)
                $account->state()->attach($states);

            return $account;
        } catch (Exception $e) {
            return null;
        }

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

        return $this->login->paginate($filter['limit']);
    }

    /**
     * Get all AccountHolders
     *
     * @return Collection
     */
    public function all()
    {
        return $this->login->all();
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
            return $this->login->find($accountId);
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
            $user = $this->login->find($accountId);

            if($user->update($data))
            {
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
            $account = $this->login->find($accountId);
            //unset the files uploaded first
            $this->__deleteImages($account);

            return $account->delete();

        } catch (Exception $e) {
            return false;
        }
    }




}