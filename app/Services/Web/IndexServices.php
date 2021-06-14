<?php
namespace App\Services\Web;

use App\Helpers\Helpers;
use App\Repositories\Web\Index\IndexRepositoryInterface;

class IndexServices
{
    public function __construct(IndexRepositoryInterface $indexRepository)
    {
        $this->indexRepository = $indexRepository;
    }

    public function getPostTop()
    {
        return $this->indexRepository->getPostTop();
    }
    public function getPostNumber()
    {
        return $this->indexRepository->getPostNumber();
    }


}
