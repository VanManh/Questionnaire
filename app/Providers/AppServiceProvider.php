<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        $this->app->bind(
            'App\Repositories\SurveyRepositoryInterface',
            'App\Repositories\Survey\SurveyRepository'
        );
        $this->app->bind(
            'App\Repositories\QuestionRepositoryInterface',
            'App\Repositories\Question\QuestionRepository'
        );
        $this->app->bind(
            'App\Repositories\AnswerRepositoryInterface',
            'App\Repositories\Answer\AnswerRepository'
        );
        // ...
    }
}
