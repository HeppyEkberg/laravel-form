### Composer:

Add elicit modal as a depencency with Composer

```
  "require": {
    "heppyekberg/laravelform": "dev-main"
  },
  "repositories": [
    { "type": "vcs", "url": "https://github.com/HeppyEkberg/laravel-form.git" }
  ],
```

```
<x-form::form :action="route('campaign.npc.put', [$campaign, $npc])" method="put" class="mt-4">
    <x-form::text name="npc[name]" label="Name" placeholder="Name" :value="$npc->name" required />
    
    <x-form::select name="npc[race_id]" label="Race">
        <option value="" class="font-weight-bold">None</option>
        @foreach($races as $race)
            <x-form::option :selected="$npc->race_id == $race->id" value="{{$race->id}}">{{$race->name}}</x-form::option>
        @endforeach
    </x-form::select>
    
    <x-form::select name="npc[sex]" label="Gender">
        <x-form::option value="" class="font-weight-bold">Unknown</x-form::option>
        <x-form::option :selected="$npc->sex == 1" value="1">Female</x-form::option>
        <x-form::option :selected="$npc->sex == 2" value="2">Male</x-form::option>
    </x-form::select>
    
    <x-form::text name="npc[image]" label="Image" placeholder="Image" :value="$npc->image" />
    
    <x-form::checkbox name="npc[is_alive]" value="1" label="Alive" :checked="(bool) $npc->is_alive" />
    
    <div class="form-group text-right">
        @if(! $npc->exists)
            <x-form::submit name="create_new" class="btn-secondary" value="Create & New" />
        @endif
    
        <x-form::submit class="btn-success" :value="$npc->exists ? 'Save' : 'Create'"/>
    </div>
</x-form::form>
```