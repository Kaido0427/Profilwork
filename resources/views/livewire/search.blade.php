<div class="inline-block">
    <input class="px-1 py-2 col-lg-8 rounded" type="text" name="" id="" placeholder="Chercher une mission..."
        wire:model="query" wire:keydown.prevent.arrow-down="incrementIndex()"
        wire:keydown.prevent.arrow-up="decrementIndex()"
        wire:keydown.prevent.backspace="resetIndex()"
        wire:keydown.prevent.enter="selectIndex()"  >

    @if (strlen($query) >= 2)
        <div class="nav-item dropdown" x-show="open">
            @if (count($jobs) > 0)
            <div class="card">
                @foreach ($jobs as $index => $job)
                <a href="{{ route('jobs.show', $job['id']) }}" >{{ $job['titre'] }}</a>
                @endforeach
            </div>
            
            @else
                <span>0 résultats pour "{{ $query }}"</span>
            @endif
        </div>
    @endif
</div>

