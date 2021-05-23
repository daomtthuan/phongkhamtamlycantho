<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class MakeView extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'make:view {view}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new blade template view.';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return void
   */
  public function handle() {
    $view = $this->argument('view');
    $path = 'resources/views/' . str_replace('.', '/', $view) . '.blade.php';

    if (file_exists($path)) {
      $this->error("View {$view} already exists!");
      return;
    }

    $dir = dirname($path);
    if (!file_exists($dir)) {
      mkdir($dir, 0777, true);
    }

    $content =
      "@extends('layouts.app')\n\n" .
      "@section('title')\n" .
      "@parent\n" .
      "@endsection\n\n" .
      "@section('template')\n" .
      "<div></div>\n" .
      "@endsection\n\n" .
      "@section('style')\n" .
      "@endsection\n\n" .
      "@section('script')\n" .
      "@endsection\n\n";
    file_put_contents($path, $content);

    $this->info("View {$view} created.");
  }
}
