<?php namespace App\Modules\Services\Login;

use App\Http\Controllers\SuperAdmin\AdminSetting\AdminSettingController;
use App\Modules\Models\User;
use App\Modules\Services\Service;

class AdminSettingService extends Service
{
    protected $login;

    public function __construct(User $login){
        $this->login = $login;
    }

    /**
     * Create new Product Category
     *
     * @param array $data
     * @return Product Category|null
     */
    public function create(array $data)
    {

    }

    /**
     * Paginate all Product Category
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
     * Get all Product Categorys
     *
     * @return Collection
     */
    public function all()
    {
        return $this->login->all();
    }

    /**
     * Get a Product Category
     *
     * @param $bankId
     * @return Product Category|null
     */
    public function find($bankId)
    {
        try {
            return $this->login->find($bankId);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Update the product category
     * @param $loginId
     * @param array $data
     * @return bool
     */
    public function update($loginId, array $data)
    {
        try {
            $user = $this->login->find($loginId);
            
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
     * Delete a product category
     *
     * @param Id
     * @return bool
     */
    public function delete($loginId)
    {
        try {
            $category = $this->login->find($loginId);
            //unset the files uploaded first
            $this->__deleteImages($category);

            return $category->delete();

        } catch (Exception $e) {
            return false;
        }
    }




}