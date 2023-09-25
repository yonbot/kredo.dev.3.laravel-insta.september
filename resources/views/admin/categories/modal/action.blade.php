{{-- Delete --}}
<div class="modal fade" id="delete-category-{{ $category->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h5 class="modal-title text-danger">
                    <i class="fa-solid fa-trash"></i> Delete Category
                </h5>
            </div>

            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Are you sure you want to delete {{ $category->name }}?</p>
                    {{-- <div class="mt-3">
                        <img src="{{ $post->image }}" alt="post id {{ $post->id }}" class="image-lg">
                        <p class="mt-1 text-muted">{{ $post->description }}</p>
                    </div> --}}
                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit --}}
<div class="modal fade" id="edit-category-{{ $category->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-warning">
            <div class="modal-header border-warning">
                <h5 class="modal-title text-warning">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Category
                </h5>
            </div>

            <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="modal-body">
                    <p>Are you sure you want to edit {{ $category->name }}?</p>
                    <div class="mt-3">
                        <input type="text" name="new_name" id="new_name" class="form-control" required>
                    </div>
                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>