<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SoftDeleteExpiredNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:softdelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Soft delete news items that have passed the will_delete_at duration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $news = News::all();

        foreach ($news as $item) {
            $willDeleteAt = Carbon::parse($item->updated_at)->addDays($item->duration);

            if ($willDeleteAt->isPast()) {
                $item->delete();
            }
        }

        $this->info('Soft deleted expired news items.');
    }
}
