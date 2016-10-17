<?php

namespace App\Console\Commands;
use App\UserLoginToken;
use Illuminate\Console\Command;

class ClearExpiredUserLoginTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:clear-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flash expired authentication tokens';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        UserLoginToken::expired()->delete();
    }
}
