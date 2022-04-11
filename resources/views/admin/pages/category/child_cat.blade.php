<ol class="dd-list">
    @foreach ($categories as $category)
        <li class="dd-item dd-collapsed" data-id="{{ $category->id }}" class="mb-4">
            <div class=" pull-right item_actions">
                <div class="dd-handle">
                    <span>{{ $category->name }}
                  
                </div>
                <div class="pull-right nest-item-action">
                    <a href="{{ route('category.edit' , $category->id)}}" class="btn btn-default btn-xs del-button dt-action-btn mp-0">Edit</a>
                    <a href="javascript:void(0);" class="btn btn-default btn-xs del-button dt-action-btn btn-menu-item delete" id="{{$category->id}}">Delete</a>
                </div>
            </div>


            @if(!$category->child->isEmpty())
                @include('admin.pages.category.child_cat',['categories' => $category->child])
            @endif
        </li>
    @endforeach
   
</ol>

