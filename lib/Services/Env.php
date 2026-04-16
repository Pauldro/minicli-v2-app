<?php namespace Lib\Services;
use Exception;
// DotEnv
use Dotenv\Dotenv;
// Minicli
use Minicli\App;
use Minicli\ServiceInterface;
// Pauldro Minicli
use Pauldro\Minicli\v2\Services\Env as EnvParent;

/**
 * Wrapper for Dotenv for environment variables
 */
class Env extends EnvParent implements ServiceInterface {
    const REQUIRED = [
        "APP.NAME",
        "APP.DESCRIPTION",
        "LOG.COMMANDS",
        "LOG.ERRORS"
    ];

    protected Dotenv $env;

    /**
     * load
     * @param  App  $app
     * @throws Exception
     * @return void
     */
    public function load(App $app) : void
    {
        try {
            $dotenv = Dotenv::createImmutable($app->base_path);
            $dotenv->load();
        } catch (Exception $e) {
            throw new Exception("Unable to load app .env");
        }
        
        $this->env = $dotenv;
        $this->env->required(static::REQUIRED);
    }
}