<?php
namespace App\Services\Manager;

use App\Helpers\Helpers;
use App\Repositories\Manager\Category\CategoryRepositoryInterface;

 class CategoryServices{

     private $categoryRepository;

     public function __construct(CategoryRepositoryInterface $categoryRepository)
     {
         $this->categoryRepository = $categoryRepository;
     }

 	public function index(){
 		return  $this->categoryRepository-> getList();
 	}

 	public function store($data){
 		$dataInsert = [
 			'name' => $data['name'],
            'slug' => Helpers::slug($data['name'])
 		];
      	return $this->categoryRepository->store($dataInsert);
	}

	public function show($id)
    {
        return $this->categoryRepository->show($id);
	}

	public function update($id, $data){
		$dataUpdate = [
			'name' => $data['name'],
            'slug' => Helpers::slug($data['name'])
		];
		return $this->categoryRepository->update($id, $dataUpdate);
	}

	public function delete($id){
		return $this->categoryRepository->delete($id);
	}
 }


?>
