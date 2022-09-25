<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Navegator;

class Navegators extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $lang, $url, $clase, $enabled, $order;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.navegators.view', [
            'navegators' => Navegator::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('lang', 'LIKE', $keyWord)
						->orWhere('url', 'LIKE', $keyWord)
						->orWhere('clase', 'LIKE', $keyWord)
						->orWhere('enabled', 'LIKE', $keyWord)
						->orWhere('order', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->lang = null;
		$this->url = null;
		$this->clase = null;
		$this->enabled = null;
		$this->order = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'url' => 'required',
		'enabled' => 'required',
        ]);

        Navegator::create([ 
			'name' => $this-> name,
			'lang' => $this-> lang,
			'url' => $this-> url,
			'clase' => $this-> clase,
			'enabled' => $this-> enabled,
			'order' => $this-> order
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Navegator Successfully created.');
    }

    public function edit($id)
    {
        $record = Navegator::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->lang = $record-> lang;
		$this->url = $record-> url;
		$this->clase = $record-> clase;
		$this->enabled = $record-> enabled;
		$this->order = $record-> order;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'url' => 'required',
		'enabled' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Navegator::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'lang' => $this-> lang,
			'url' => $this-> url,
			'clase' => $this-> clase,
			'enabled' => $this-> enabled,
			'order' => $this-> order
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Navegator Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Navegator::where('id', $id);
            $record->delete();
        }
    }
}
