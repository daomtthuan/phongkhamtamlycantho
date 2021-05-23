<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakePage extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'make:page {name}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new page.';

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
    $name = $this->argument('name');
    $path = 'resources/views/pages/' . str_replace('.', '/', $name) . '.blade.php';

    if (file_exists($path)) {
      $this->error("Page {$name} already exists!");
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

    $this->info("Page {$name} created.");
  }
}
