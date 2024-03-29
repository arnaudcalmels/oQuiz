<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';

    /**
     * Get the question of the quiz.
     */
    public function questions()
    {
        return $this->hasMany('App\Models\Question', 'quizzes_id');
    }

    /**
     * Get the author of the quiz.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\AppUser', 'app_users_id');
    }

    /**
     * Get the tags for the quiz.
     */ 
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'quizzes_has_tags', 'quizzes_id', 'tags_id');
    }
}