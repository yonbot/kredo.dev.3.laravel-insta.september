@extends('layouts.app')

@section('title', 'Admin: Categories')

@section('content')
<div class="container w-100">
  <form action="{{ route('admin.categories.store') }}" method="post">
    @csrf
    <div class="row gx-2 mb-4">
      <div class="col-4">
        <input type="text" name="name" id="name" class="form-control" placeholder="Add a category..." required>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">
          <i class="fa-solid fa-plus"></i> Add
        </button>
        @error('name')
          <p class="text-danger small">{{ $message }}</p>
        @enderror
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-7">
      <table class="table table-hover align-middle bg-white border text-secondary text-center">
        <thead class="table-warning text-secondary small">
          <tr>
            <th>#</th>
            <th>NAME</th>
            <th>COUNT</th>
            <th>LAST UPDATED</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse($all_categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td class="text-dark">{{ $category->name }}</td>
              <td>{{ $category->categryPost->count() }}</td>
              <td>{{ $category->updated_at }}</td>
              <td>
                <button type="button" class="btn btn-outline-warning btn-sm" 
                  data-bs-toggle="modal" data-bs-target="#edit-category-{{ $category->id }}">
                  <i class="fa-solid fa-pen"></i>
                </button>
                <button type="submit" class="btn btn-outline-danger btn-sm" 
                  data-bs-toggle="modal" data-bs-target="#delete-category-{{ $category->id }}">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </td>
            </tr>
            {{-- include the modal here --}}
            @include('admin.categories.modal.action')
          @empty
            <tr>
              <td colspan="5" class="lead text-muted text-center">
                No categories found.
              </td>
            </tr>
          @endforelse
          <tr>
            <td></td>
            <td class="text-dark">
              Uncategorized
              <p class="xsmall mb-0 text-muted">Hidden posts are not included.</p>
            </td>
            <td>{{ $uncategorized_count }}</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection