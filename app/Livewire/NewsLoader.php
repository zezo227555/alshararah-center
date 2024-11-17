<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsLoader extends Component
{
    public $page = 1;

    use WithPagination;

    public function loadMore()
    {
        $this->page++;
    }

    public function loadLess()
    {
        $this->page--;
    }

    public function render()
    {
        $news = News::paginate(6, ['*'], 'page', $this->page);
        return view('livewire.news-loader', ['news' => $news, 'page' => $this->page]);
    }
}
