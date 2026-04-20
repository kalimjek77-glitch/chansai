<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Management | Add New Student</title>
    
    <!-- Bootstrap 5 CSS + Icons + professional fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional but adds nice icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts for subtle refinement -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    
    <style>
        /* custom overrides to ensure professional, clean look */
        body {
            background: #f4f7fc;
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
        }
        
        /* card styling with soft shadow and rounded corners */
        .form-card {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.05), 0 4px 8px rgba(0, 0, 0, 0.02);
            transition: transform 0.2s ease;
        }
        
        .form-card:hover {
            transform: translateY(-2px);
        }
        
        .card-header-custom {
            background: white;
            border-bottom: 1px solid #e9ecef;
            padding: 1.5rem 1.8rem 0.8rem 1.8rem;
            border-radius: 1.25rem 1.25rem 0 0 !important;
        }
        
        .card-body-custom {
            padding: 1.8rem;
        }
        
        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
            color: #1e2a3e;
            letter-spacing: -0.2px;
        }
        
        .form-control, .form-select {
            border: 1px solid #dce4ec;
            border-radius: 0.75rem;
            padding: 0.7rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s;
            background-color: #ffffff;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #3b7cbf;
            box-shadow: 0 0 0 4px rgba(59, 124, 191, 0.15);
            outline: none;
        }
        
        .form-control::placeholder {
            color: #adb5bd;
            font-weight: 400;
            font-size: 0.9rem;
        }
        
        .btn-save {
            background: #1f6392;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 2rem;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .btn-save:hover {
            background: #0e4b73;
            transform: translateY(-1px);
            box-shadow: 0 8px 18px rgba(31, 99, 146, 0.2);
        }
        
        .btn-save:active {
            transform: translateY(1px);
        }
        
        .error-alert {
            border-radius: 1rem;
            border-left: 5px solid #dc3545;
            background-color: #fff5f5;
            font-size: 0.9rem;
            padding: 0.8rem 1.2rem;
        }
        
        .error-list {
            padding-left: 1.3rem;
            margin-bottom: 0;
        }
        
        .error-list li {
            margin-bottom: 0.25rem;
        }
        
        .page-header {
            font-weight: 700;
            font-size: 1.9rem;
            color: #1e4663;
            letter-spacing: -0.5px;
        }
        
        .sub-header {
            color: #5a6e7c;
            font-size: 1rem;
            border-left: 3px solid #1f6392;
            padding-left: 0.8rem;
        }
        
        hr {
            opacity: 0.5;
            margin: 0.5rem 0 1rem 0;
        }
        
        /* additional responsive spacing */
        @media (max-width: 576px) {
            .card-body-custom {
                padding: 1.5rem;
            }
            .page-header {
                font-size: 1.6rem;
            }
        }
        
        /* icon inside input (optional but not intrusive) */
        .input-group-icon {
            position: relative;
        }
    </style>
</head>
<body class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <!-- header area with breadcrumb style -->
                <div class="mb-4 d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="page-header mb-1">
                            <i class="bi bi-person-plus-fill me-2" style="color: #1f6392; font-style: italic; "></i> Add Student
                        </h1>
                    </div>
                    <div class="mt-2 mt-sm-0">
                        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary rounded-pill px-4" style="border-color: #cbdbe0; color:#2c3e50;">
                            <i class="bi bi-arrow-left me-1"></i> Back to list
                        </a>
                    </div>
                </div>
                
                <!-- main form card with bootstrap professional styling -->
                <div class="card form-card">
                    <div class="card-header-custom bg-white">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-journal-bookmark-fill fs-4 me-2" style="color:#2c7cb6;"></i>
                            <h5 class="mb-0 fw-semibold" style="color: #1e4663;">Student information</h5>
                        </div>
                        <hr>
                        <p class="text-muted small mt-2 mb-0">All fields are required unless noted</p>
                    </div>
                    
                    <div class="card-body-custom">
                        <!-- Error handling section - professional validation display -->
                        @if ($errors->any())
                        <div class="alert error-alert alert-dismissible fade show mb-4" role="alert">
                            <div class="d-flex">
                                <div class="me-2">
                                    <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                                </div>
                                <div class="w-100">
                                    <strong class="text-dark">Unable to save student</strong>
                                    <div class="mt-1">Please correct the following errors:</div>
                                    <ul class="error-list mt-2">
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        <!-- Form with proper Laravel Blade syntax (preserved) -->
                        <form method="post" action="{{ route('students.store') }}" novalidate>
                            @csrf
                            @method('post')
                            
                            <div class="row g-4">
                                <!-- First Name field -->
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">
                                        <i class="bi bi-person me-1"></i> First Name
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('first_name') is-invalid @enderror" 
                                           id="first_name" 
                                           name="first_name" 
                                           placeholder="e.g., John" 
                                           value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Student's given name</div>
                                </div>
                                
                                <!-- Last Name field -->
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">
                                        <i class="bi bi-person-badge me-1"></i> Last Name
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('last_name') is-invalid @enderror" 
                                           id="last_name" 
                                           name="last_name" 
                                           placeholder="e.g., Smith" 
                                           value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Student's family name</div>
                                </div>
                                
                                <!-- Year field -->
                                <div class="col-md-6">
                                    <label for="year" class="form-label">
                                        <i class="bi bi-calendar3 me-1"></i> Academic Year
                                    </label>
                                    <select class="form-select @error('year') is-invalid @enderror" id="year" name="year">
                                        <option value="" disabled selected>– Select year –</option>
                                        <option value="1" {{ old('year') == '1' ? 'selected' : '' }}>1st Year</option>
                                        <option value="2" {{ old('year') == '2' ? 'selected' : '' }}>2nd Year</option>
                                        <option value="3" {{ old('year') == '3' ? 'selected' : '' }}>3rd Year</option>
                                        <option value="4" {{ old('year') == '4' ? 'selected' : '' }}>4th Year</option>
                                    </select>
                                    @error('year')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Current year of study</div>
                                </div>
                                
                                <!-- Section field -->
                                <div class="col-md-6">
                                    <label for="section" class="form-label">
                                        <i class="bi bi-grid-3x3-gap-fill me-1"></i> Section
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('section') is-invalid @enderror" 
                                           id="section" 
                                           name="section" 
                                           placeholder="e.g., A, B, C" 
                                           value="{{ old('section') }}">
                                    @error('section')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Class section</div>
                                </div>
                            </div>
                            
                            <!-- Additional helpful note and submit actions -->
                            <div class="mt-5 pt-2 d-flex flex-wrap justify-content-between align-items-center">
                                <div>
                                    <button type="submit" class="btn btn-save text-white rounded-pill px-5">
                                        <i class="bi bi-check-lg me-1"></i> Save Student
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle for interactive components (like alert dismiss) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- optional tiny script to keep validation consistent and provide live year placeholder -->
    <script>
        (function() {
            'use strict';
            // ensure that reset button clears any manual error styles (optional improvement)
            const resetBtn = document.querySelector('button[type="reset"]');
            const form = document.querySelector('form');
            if (resetBtn && form) {
                resetBtn.addEventListener('click', function(e) {
                    // delay to allow native reset then clear invalid-feedback classes
                    setTimeout(() => {
                        const invalidInputs = form.querySelectorAll('.is-invalid');
                        invalidInputs.forEach(input => {
                            input.classList.remove('is-invalid');
                        });
                        const feedbackDivs = form.querySelectorAll('.invalid-feedback');
                        feedbackDivs.forEach(fb => fb.remove());
                    }, 10);
                });
            }
            
            // prevent accidental double submission (improves UX)
            const submitBtn = document.querySelector('button[type="submit"]');
            if (submitBtn && form) {
                form.addEventListener('submit', function() {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Saving...';
                    // re-enable only if something fails? but better just let it submit.
                    // timeout will re-enable after 3 sec if form somehow fails (fallback)
                    setTimeout(() => {
                        if (submitBtn.disabled === true) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = '<i class="bi bi-check-lg me-1"></i> Save Student';
                        }
                    }, 2000);
                });
            }
        })();
    </script>
</body>
</html>