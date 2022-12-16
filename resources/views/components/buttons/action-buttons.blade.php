@props([
    'show' => null,
    'edit' => null,
    'delete' => null,
])
<div class="hstack gap-2">
    <a href="{{ $show }}"
       class="btn btn-sm btn-outline-secondary"><span class="feather-sm"
                                                      data-feather="eye"></span></a>
    @if($edit)
        <a href="{{ $edit }}"
           class="btn btn-sm btn-outline-secondary"><span class="feather-sm"
                                                          data-feather="edit-3"></span></a>
    @endif

    @if($delete)
        <form action="{{ $delete }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="btn btn-sm btn-outline-secondary"><span class="feather-sm"
                                                                   data-feather="trash-2"></span></button>
        </form>
    @endif
</div>
