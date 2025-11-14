@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endpush

@section('content')
<div class="create-product-container">
    <!-- Header Section -->
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h2 class="page-title">
                <i class="fas fa-plus-circle"></i>Nuevo Producto
            </h2>
            <p class="page-subtitle">Agrega un nuevo producto a tu catálogo</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-back">
            <i class="fas fa-arrow-left"></i>Volver
        </a>
    </div>

    <!-- Form Card -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card create-product-card">
                <div class="card-header">
                    <h5 class="form-title">
                        <i class="fas fa-box-open"></i>Información del Producto
                    </h5>
                </div>
                
                <div class="card-body">
                    <form action="{{route('admin.products.store')}}" method="POST">
                        @csrf
                        
                        <!-- Nombre del Producto -->
                        <div class="form-group">
                            <label for="productName" class="form-label required">
                                <i class="fas fa-tag"></i>Nombre del Producto
                            </label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="productName" 
                                   name="name" 
                                   value="{{old('name')}}"
                                   placeholder="Ej: iPhone 15 Pro Max">
                            @error('name')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Descripción del Producto -->
                        <div class="form-group">
                            <label for="productDescription" class="form-label required">
                                <i class="fas fa-align-left"></i>Descripción
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="productDescription" 
                                      name="description" 
                                      rows="4"
                                      placeholder="Describe las características principales del producto...">{{old('description')}}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle"></i>{{ $message }}
                                </div>
                            @enderror
                            <div class="form-text">
                                <i class="fas fa-info-circle"></i>Mínimo 10 caracteres recomendados
                            </div>
                        </div>

                        <!-- Precio -->
                        <div class="form-group">
                            <label for="productPrice" class="form-label required">
                                <i class="fas fa-dollar-sign"></i>Precio (COP)
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" 
                                       class="form-control @error('price') is-invalid @enderror" 
                                       id="productPrice" 
                                       name="price" 
                                       value="{{old('price')}}"
                                       placeholder="0.00">
                            </div>
                            @error('price')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Categoría del Producto -->
                        <div class="form-group">
                            <label for="productCategory" class="form-label required">
                                <i class="fas fa-list"></i>Categoría
                            </label>
                            <select class="form-control @error('category') is-invalid @enderror" 
                                    id="productCategory" 
                                    name="category">
                                <option selected disabled>-- Selecciona una categoría --</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" 
                                            {{ old('category') == $item->id ? 'selected' : '' }}>
                                        {{ $item->name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Marca -->
                        <div class="form-group">
                            <label for="productBrand" class="form-label required">
                                <i class="fas fa-copyright"></i>Marca
                            </label>
                            <select class="form-control @error('brand') is-invalid @enderror" 
                                    id="productBrand" 
                                    name="brand">
                                <option selected disabled>-- Selecciona una marca --</option>
                                @foreach ($brands as $item)
                                    <option value="{{ $item->id }}" 
                                            {{ old('brand') == $item->id ? 'selected' : '' }}>
                                        {{ $item->name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('brand')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Imagen del Producto (Comentado) -->
                        <!-- 
                        <div class="form-group">
                            <label for="image" class="form-label">
                                <i class="fas fa-image"></i>Imagen del Producto
                            </label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div> 
                        -->

                        <!-- Botones -->
                        <div class="btn-group-create">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Crear Producto
                            </button>
                            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Agregar funcionalidad adicional si es necesaria
    document.addEventListener('DOMContentLoaded', function() {
        // Validación en tiempo real
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('is-valid');
                    this.classList.remove('is-invalid');
                }
            });
        });
        
        // Loading state para el botón
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.classList.add('btn-loading');
            submitBtn.disabled = true;
        });
    });
</script>
@endpush