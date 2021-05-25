<?php
namespace App\Services\Web;

use App\Helpers\Helpers;
use App\Repositories\Web\Business\BusinessRepositoryInterface;

 class BusinessServices
 {

    public function __construct(BusinessRepositoryInterface $businessRepository)
     {
         $this->businessRepository = $businessRepository;
     }

    public function getBusiness()
    {
        return $this->businessRepository->getBusiness();
    }
 }
?>
