<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Student | Student Management System</title>
    
    <!-- Bootstrap 5 CSS + Icons + Professional Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Bootstrap Icons for better visual cues -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts: subtle modern sans -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    
    <style>
        /* Custom overrides for a truly professional, polished look */
        body {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background: #f4f7fc;  /* soft professional gray-blue background */
            padding: 2rem 0;
        }
        
        .card-custom {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.05), 0 4px 8px rgba(0, 0, 0, 0.02);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            overflow: hidden;
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, #0a2b3e 0%, #1a4a6f 100%);
            padding: 1.5rem 2rem;
            border-bottom: none;
        }
        
        .card-header-custom h2 {
            font-weight: 600;
            letter-spacing: -0.01em;
            margin: 0;
            font-size: 1.65rem;
        }
        
        .card-header-custom p {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.85;
        }
        
        .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #2c3e4e;
            margin-bottom: 0.4rem;
        }
        
        .form-control, .form-select {
            border-radius: 0.75rem;
            border: 1px solid #e0e7ed;
            padding: 0.7rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s;
            background-color: #ffffff;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.02);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #1a4a6f;
            box-shadow: 0 0 0 4px rgba(26, 74, 111, 0.15);
            outline: none;
        }
        
        .btn-update {
            background: #1a4a6f;
            border: none;
            padding: 0.8rem 1.8rem;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 2rem;
            transition: all 0.2s;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        
        .btn-update:hover {
            background: #0f3a56;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(26, 74, 111, 0.25);
        }
        
        .btn-update:active {
            transform: translateY(0);
        }
        
        /* error alert styling */
        .alert-custom {
            border-radius: 1rem;
            border-left: 5px solid #dc3545;
            background-color: #fff5f5;
            padding: 0.8rem 1.2rem;
        }
        
        .alert-custom ul {
            margin: 0;
            padding-left: 1.5rem;
        }
        
        .alert-custom li {
            margin: 0.2rem 0;
            font-size: 0.9rem;
        }
        
        .input-icon-group {
            position: relative;
        }
        
        .input-icon-group .bi {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #8ba0ae;
            font-size: 1.1rem;
            pointer-events: none;
        }
        
        .input-icon-group .form-control {
            padding-left: 2.6rem;
        }
        
        hr {
            opacity: 0.5;
            margin: 0.5rem 0 1.2rem;
        }
        
        .footer-note {
            background: #f8fafc;
            border-top: 1px solid #e9edf2;
            border-radius: 0 0 1.25rem 1.25rem;
            font-size: 0.75rem;
            color: #5b6f7e;
        }
        
        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }
            .card-header-custom {
                padding: 1rem 1.25rem;
            }
            .btn-update {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-7 col-md-9 col-12">
            <!-- Professional Card Layout -->
            <div class="card card-custom shadow-lg border-0">
                <div class="card-header-custom text-white">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-pencil-square fs-2"></i>
                        <div>
                            <h2 class="mb-0">Edit Student Record</h2>
                            <p class="mb-0 mt-1">Update student information below</p>
                        </div>
                    </div>
                </div>
                
                <div class="card-body p-4 p-xl-5">
                    <!-- Error Display Section - Bootstrap styled professional alerts -->
                    @if ($errors->any())
                        <div class="alert alert-custom alert-dismissible fade show mb-4" role="alert">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <strong class="text-danger">Validation errors</strong>
                                    <div class="mt-1">Please check the following fields:</div>
                                    <ul class="mb-0 mt-2">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <!-- Student Update Form -->
                    <form method="post" action="{{ route('students.update', $student->id) }}" novalidate>
                        @csrf
                        @method('put')
                        
                        <div class="row g-4">
                            <!-- First Name column -->
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">
                                    <i class="bi bi-person-badge me-1"></i> First Name
                                </label>
                                <div class="input-icon-group">
                                    <i class="bi bi-person"></i>
                                    <input type="text" 
                                           name="first_name" 
                                           id="first_name" 
                                           class="form-control @error('first_name') is-invalid @enderror" 
                                           placeholder="e.g., John" 
                                           value="{{ $student->first_name }}">
                                </div>
                                @error('first_name')
                                    <div class="invalid-feedback d-block mt-1 small">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Last Name column -->
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">
                                    <i class="bi bi-person-vcard me-1"></i> Last Name
                                </label>
                                <div class="input-icon-group">
                                    <i class="bi bi-person"></i>
                                    <input type="text" 
                                           name="last_name" 
                                           id="last_name" 
                                           class="form-control @error('last_name') is-invalid @enderror" 
                                           placeholder="e.g., Doe" 
                                           value="{{ $student->last_name }}">
                                </div>
                                @error('last_name')
                                    <div class="invalid-feedback d-block mt-1 small">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Year Field -->
                            <div class="col-md-6">
                                <label for="year" class="form-label">
                                    <i class="bi bi-calendar3 me-1"></i> Academic Year
                                </label>
                                <div class="input-icon-group">
                                    <i class="bi bi-mortarboard"></i>
                                    <input type="text" 
                                           name="year" 
                                           id="year" 
                                           class="form-control @error('year') is-invalid @enderror" 
                                           placeholder="e.g., 2024, Sophomore, 2nd Year" 
                                           value="{{ $student->year }}">
                                </div>
                                @error('year')
                                    <div class="invalid-feedback d-block mt-1 small">{{ $message }}</div>
                                @enderror
                                <div class="form-text text-muted small">Year level</div>
                            </div>
                            
                            <!-- Section Field -->
                            <div class="col-md-6">
                                <label for="section" class="form-label">
                                    <i class="bi bi-diagram-3 me-1"></i> Section
                                </label>
                                <div class="input-icon-group">
                                    <i class="bi bi-people"></i>
                                    <input type="text" 
                                           name="section" 
                                           id="section" 
                                           class="form-control @error('section') is-invalid @enderror" 
                                           placeholder="e.g., Section A, CS-A, Group B" 
                                           value="{{ $student->section }}">
                                </div>
                                @error('section')
                                    <div class="invalid-feedback d-block mt-1 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <!-- Action Buttons: Update + Cancel/Back (conceptual) -->
                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                            <button type="submit" class="btn btn-update text-white px-5 py-2">
                                <i class="bi bi-check2-circle me-2"></i> Update Student
                            </button>
                            <!-- Optional cancel/back link (preserves professional navigation) -->
                            <a href="{{ route('students.index') }}" class="text-decoration-none text-secondary small fw-medium" onclick="history.back(); return false;">
                                <i class="bi bi-arrow-left me-1"></i> Cancel & Go back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS bundle for proper alerts close and optional interactions -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Auto-hide alert after 5 seconds (professional user experience) -->
<script>
    (function() {
        // auto-dismiss alerts after 5 seconds for cleaner UI
        const alertElement = document.querySelector('.alert-custom');
        if (alertElement) {
            setTimeout(() => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alertElement);
                bsAlert.close();
            }, 2000);
        }
        
        // Simple client-side visual hint: add focus rings effect consistency
        const formInputs = document.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    })();
</script>
</body>
</html>