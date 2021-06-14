<?php
namespace App\Services\Web;

use App\Helpers\Helpers;
use App\Repositories\Web\Posts\PostRepositoryInterface;

class PostServices
{

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function detail($id)
    {
        return $this->postRepository->detail($id);
    }
}
?>
