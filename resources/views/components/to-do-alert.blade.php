<div>
    <!-- 
      Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant 
      
    
    -->
  @if(session()->has('message'))
    {{ $slot }}
    <div class="py-4 px-2 bg-green-300">{{ session()->get('message') }}</div>
  @elseif(session()->has('error'))
  {{ $slot }}
    <div class="py-4 px-2 bg-red-300">{{ session()->get('error') }}</div>
  @endif
  
  @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <div class="ml-3">
        <ul class="list-disc bg-rose-200">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul> 
        {{ session()->get('error') }} 
        </div>
    </div>
  @endif

</div>