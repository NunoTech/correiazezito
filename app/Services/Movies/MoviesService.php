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

    public function save($post)
    {
        $movie = [
            'post_id' => $post->id,
            'code' => $this->replaceMovie($post['movie'])
        ];
        return $this->movieRepository->save($movie);
    }

    private function replaceMovie(string $movie): string
    {
        return Str::replace('https://youtu.be/', '', $movie);
    }
}
