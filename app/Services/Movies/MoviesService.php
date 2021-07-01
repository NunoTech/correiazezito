<?php


namespace App\Services\Movies;


use App\Repositories\Movies\MovieRepositoryInterface;
use Illuminate\Support\Str;

class MoviesService implements MoviesServiceInterface
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function save($postId, $code)
    {
        $movie = [
            'post_id' => $postId,
            'code' => $this->replaceMovie($code)
        ];
        return $this->movieRepository->save($movie);
    }

    private function replaceMovie(string $movie): string
    {
        return Str::replace('https://youtu.be/', '', $movie);
    }

    public function updateOrCreate($attributes)
    {

    }

    public function getById($movieId)
    {

    }

    public function delete($movieId)
    {
        return $this->movieRepository->delete($movieId);
    }
}
