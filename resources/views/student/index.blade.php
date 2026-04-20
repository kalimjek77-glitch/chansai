<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Management System | Dashboard</title>
    
    <!-- Bootstrap 5 CSS + Icons + Professional Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons library for clean icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts: Inter for modern, professional typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    
    <style>
        /* Custom overrides for a refined, professional look */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f4f7fc;
            color: #1e2a3e;
            line-height: 1.5;
        }
        
        /* Card style for main content */
        .dashboard-card {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03), 0 2px 6px rgba(0,0,0,0.05);
            background-color: #ffffff;
            transition: all 0.2s ease;
        }
        
        /* Table styling: clean borders, subtle hover */
        .table-custom {
            margin-bottom: 0;
            vertical-align: middle;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table-custom thead th {
            background-color: #f8fafc;
            color: #1e466e;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 0.75rem;
            border-bottom: 1px solid #e2e8f0;
            border-top: none;
        }
        
        .table-custom tbody td {
            padding: 0.9rem 0.75rem;
            color: #2c3e50;
            font-weight: 500;
            border-bottom: 1px solid #edf2f7;
            vertical-align: middle;
        }
        
        .table-custom tbody tr:hover {
            background-color: #fefce8;
            transition: background 0.2s;
        }
        
        /* Action buttons (Edit / Delete) inside table */
        .btn-edit {
            background-color: #eef2ff;
            color: #1e40af;
            border-radius: 40px;
            padding: 0.3rem 0.9rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid transparent;
        }
        
        .btn-edit:hover {
            background-color: #dbeafe;
            color: #1e3a8a;
            transform: translateY(-1px);
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        
        .btn-delete {
            background-color: #fff1f0;
            color: #b91c1c;
            border-radius: 40px;
            padding: 0.3rem 0.9rem;
            font-size: 0.75rem;
            font-weight: 600;
            border: none;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .btn-delete:hover {
            background-color: #fee2e2;
            color: #991b1b;
            transform: translateY(-1px);
        }
        
        /* Add student button */
        .btn-add-primary {
            background-color: #0f3b5c;
            border: none;
            padding: 0.6rem 1.4rem;
            font-weight: 600;
            border-radius: 2rem;
            font-size: 0.85rem;
            transition: all 0.2s;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        
        .btn-add-primary:hover {
            background-color: #0a2f4a;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        /* Flash message (success) styling */
        .alert-custom {
            border-radius: 1rem;
            border-left: 5px solid #2e7d32;
            background-color: #e8f5e9;
            color: #1e4620;
            font-weight: 500;
            padding: 0.85rem 1.2rem;
            font-size: 0.9rem;
        }
        
        /* Empty state styling */
        .empty-state {
            background-color: #f9fafb;
            border-radius: 1.25rem;
            padding: 2.5rem;
            text-align: center;
        }
        
        /* header area */
        .page-header {
            border-bottom: 1px solid #e4e9f0;
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
        }
        
        /* responsive table wrapper */
        .table-responsive-stack {
            overflow-x: auto;
            border-radius: 1rem;
        }
        
        /* badge style for Year/Section visual */
        .badge-year {
            background-color: #e9ecef;
            color: #2c3e50;
            font-weight: 500;
            padding: 0.35rem 0.7rem;
            border-radius: 30px;
            font-size: 0.75rem;
        }
        
        /* footer note */
        .footer-note {
            font-size: 0.75rem;
            color: #6c757d;
            border-top: 1px solid #e9ecef;
            padding-top: 1rem;
            margin-top: 2rem;
        }
        
        @media (max-width: 576px) {
            .btn-edit, .btn-delete {
                padding: 0.25rem 0.7rem;
                font-size: 0.7rem;
            }
            .table-custom thead th {
                font-size: 0.7rem;
                padding: 0.7rem 0.5rem;
            }
        }

        /* Modern Header Container */
.modern-header {
    background: #ffffff;
    padding: 20px 25px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 6px 18px rgba(0,0,0,0.04);
}

/* Flex layout */
.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

/* LEFT SIDE */
.header-left {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Icon */
.icon-box {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: #f3f4f6;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #374151;
}

/* Title */
.title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #111827;
}

/* RIGHT SIDE */
.header-right {
    margin-top: 10px;
}

/* Add Button */
.btn-add {
    background: #ffffff;
    color: #000000;
    box-shadow: black 3px;
    padding: 10px 18px;
    border-radius: 12px;
    font-size: 0.85rem;
    font-weight: 500;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: 0.2s;
}

/* Hover effect */
.btn-add:hover {
    background: #1f2937;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 576px) {
    .header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .header-right {
        width: 100%;
    }

    .btn-add {
        width: 100%;
        justify-content: center;
    }
}
/* Circle Logo */
.logo-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    padding: 5px;
    background: linear-gradient(135deg, #e5e7eb, #f9fafb);
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

.logo-circle img {
    border-radius: 50%;
}

/* Optional hover effect */
.logo-circle:hover {
    transform: scale(1.05);
    transition: 0.2s;
}
    </style>
</head>
<body>

<div class="modern-header mb-4">
    <div class="header-content">
        
<div class="header-left">
    <div class="logo-circle">
        <img src="logo.png" alt="Logo">
    </div>
    <div>
        <h1 class="title mb-0">Students List</h1>
        <small class="text-muted">Manage all student records</small>
    </div>
</div>

        <!-- RIGHT: Button -->
        <div class="header-right">
            <a href="{{ route('students.create') }}" class="btn-add">
                <i class="bi bi-plus-circle"></i> Add Student
            </a>
        </div>

    </div>
</div>

    <!-- Success message with Bootstrap styling (if session success exists) -->
    @if (session('success'))
        <div class="alert alert-custom d-flex align-items-center mb-4 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-6" style="color: #2e7d32;"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main card component for student list table -->
    <div class="dashboard-card p-3 p-lg-4">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <div class="mt-2 mt-sm-0">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
                    <i class="bi bi-person-badge me-1"></i> Total: {{ count($student) }}
                </span>
            </div>
        </div>

        @if(count($student) > 0)
            <div class="table-responsive-stack">
                <table class="table table-custom w-100">
                    <thead>
                        <tr>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Year</th>
                            <th scope="col">Section</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $students)
                        <tr>
                            <td class="fw-medium">{{ $students->first_name }}</td>
                            <td class="fw-medium">{{ $students->last_name }}</td>
                            <td>
                                <span class="badge-year">{{ $students->year }}</span>
                            </td>
                            <td>
                                <span class="badge-year">{{ $students->section }}</span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex gap-2 justify-content-start justify-content-md-center flex-wrap">
                                    <!-- Edit Link (styled as button) -->
                                    <a href="{{ route('students.edit', $students->id) }}" class="btn-edit text-decoration-none">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    
                                    <!-- Delete Form with inline style and confirmation (optional nice-to-have) -->
                                    <form method="post" action="{{ route('students.destroy', $students->id) }}" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this student record? This action cannot be undone.');">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn-delete border-0">
                                            <i class="bi bi-trash3"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <!-- Empty state with professional design -->
            <div class="empty-state">
                <i class="bi bi-inbox fs-1 text-muted mb-3 d-block"></i>
                <h5 class="fw-semibold">No student records found</h5>
                <p class="text-muted mb-3">Start by adding a new student to the database.</p>
            </div>
        @endif
    </div>
</div>

<!-- Bootstrap JS bundle (for alert closing and optional interactions) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: auto-dismiss alert after 4 seconds for better UX (subtle) -->
<script>
    (function() {
        const alertElement = document.querySelector('.alert-custom');
        if (alertElement) {
            setTimeout(() => {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(alertElement);
                bsAlert.close();
            }, 1000);
        }
    })();
</script>
</body>
</html>