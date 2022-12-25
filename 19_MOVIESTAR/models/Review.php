<?php

class Review
{

    public $id;
    public $rating;
    public $review;
    public $users_id;
    public $movies_id;

}

interface ReviewDAOInterface
{
    // aqui ficarão os métodos utilizados na review

    public function buildReview($data); #Recebe um array com dados
    public function create(Review $review); # Recebe o objeto de fato

    public function getMoviesReview($id); # Resgata notas e comentários de filme pelo id
    public function hasAlreadyReview($id, $users_Id);
    public function getRating($id);

}














?>