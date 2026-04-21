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
/* ================= BASE ================= */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background-color: #c3c5c8;
    color: #1e2a3e;
    line-height: 1.5;
}

/* ================= CARDS ================= */
.dashboard-card {
    border: 1px solid #000000 ;
    box-shadow: 0 8px 20px rgba(0,0,0,0.03), 0 2px 6px rgba(0,0,0,0.05);
    background-color: #ffffff;
    transition: all 0.2s ease;
}

/* ================= TABLE ================= */
.table-custom {
    margin-bottom: 0;
    vertical-align: middle;
    border-collapse: separate;
    border-spacing: 0;
}

.table-custom thead th {
    background-color: #0b1f3a;
    color: #ffffff;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem 0.75rem;
    border: none;
}

.table-custom tbody td {
    padding: 0.9rem 0.75rem;
    color: #2c3e50;
    font-weight: 500;
    border-bottom: 1px solid #edf2f7;
}

.table-custom tbody tr:hover {
    background-color: rgba(30, 78, 216, 0.06);
}

/* ================= BUTTONS ================= */
.btn-edit {
    background-color: #1c3a96;
    color: #ffffff;
    border-radius: 40px;
    padding: 0.3rem 0.9rem;
    font-size: 0.75rem;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s;
    border: 1px solid transparent;
}

.btn-edit:hover {
    background-color: #1e4ed8;
    color: white;
    transform: translateY(-1px);
}

.btn-delete {
    background-color: #b42020;
    color: #ffffff;
    border-radius: 40px;
    padding: 0.3rem 0.9rem;
    font-size: 0.75rem;
    font-weight: 600;
    border: none;
    transition: all 0.2s;
}

.btn-delete:hover {
    background-color: #dc2626;
    color: white;
    transform: translateY(-1px);
}

/* ================= ADD BUTTON ================= */
.btn-add-primary {
    background-color: #ffffff;
    color: #000000;
    border: 1px solid #000000;
    padding: 0.6rem 1.4rem;
    font-weight: 600;
    border-radius: 2rem;
    font-size: 0.85rem;
    transition: all 0.2s;
    box-shadow: 0 3px 10px rgba(30, 78, 216, 0.15);
}

.btn-add-primary:hover {
    background-color: #1e4ed8;
    transform: translateY(-1px);
}

/* ================= ALERT ================= */
.alert-custom {
    border-radius: 1rem;
    border-left: 5px solid #1e4ed8;
    background-color: rgba(30, 78, 216, 0.08);
    color: #0b1f3a;
    font-weight: 500;
}

/* ================= EMPTY STATE ================= */
.empty-state {
    background-color: #f9fafb;
    border-radius: 1.25rem;
    padding: 2.5rem;
    text-align: center;
}

/* ================= HEADER (UPDATED PROFESSIONAL WHITE DESIGN) ================= */
.modern-header {
    background: #ffffff;
    padding: 10px 20px;   /* ↓ reduced from 20px 25px */
    border: none;
    box-shadow: 0 4px 12px rgba(30, 78, 216, 0.08),
                0 2px 6px rgba(0, 0, 0, 0.05);
}

/* FLEX */
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
    gap: 12px;
}

/* ICON BOX (SOFT BLUE) */
.icon-box {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: rgba(30, 78, 216, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #1e4ed8;
}

/* TITLE */
.title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #0f172a;
}

/* RIGHT SIDE */
.header-right {
    margin-top: 10px;
}

/* ADD BUTTON */
.btn-add {
    background: #0b1f3a;
    border:1px solid #000000;
    color: #ffffff;
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

.btn-add:hover {
    background: #0b1f3a;
    color: white;
    transform: translateY(-2px);
}

/* ================= LOGO (NO BACKGROUND, NO BORDER) ================= */
.logo-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    background: transparent;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.logo-circle:hover {
    transform: scale(1.05);
    transition: 0.2s;
}

/* ================= BADGE ================= */
.badge-year {
    color: #000000;
    font-weight: 500;
    padding: 0.35rem 0.7rem;
    border-radius: 30px;
    font-size: 0.75rem;
}

/* ================= FOOTER ================= */
.footer-note {
    font-size: 0.75rem;
    color: #6c757d;
    border-top: 1px solid #e9ecef;
    padding-top: 1rem;
    margin-top: 2rem;
}

/* ================= RESPONSIVE ================= */
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

    .table-custom thead th {
        font-size: 0.7rem;
        padding: 0.7rem 0.5rem;
    }
}
</style>
</head>
<body>

<div class="modern-header mb-4">
    <div class="header-content">
        
<div class="header-left">
    <div class="logo-circle">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div>
        <h1 class="title mb-0">𝐁𝐒𝐈𝐓 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬 𝐋𝐢𝐬𝐭</h1>
    </div>
</div>

        <!-- RIGHT: Button -->
        <div class="header-right">
            <a href="#" class="btn-add" data-bs-toggle="modal" data-bs-target="#addStudentModal">
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

    <!-- 🔍 SEARCH BAR -->
<div class="dashboard-card p-3 p-lg-4 mb-3">

    <div class="row g-2">

        <!-- Search name -->
        <div class="col-md-4">
            <input type="text" id="searchInput" class="form-control"
                placeholder="Search first or last name...">
        </div>

        <!-- Year filter -->
        <div class="col-md-3">
            <select id="yearFilter" class="form-select">
                <option value="">All Year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <!-- Section filter -->
        <div class="col-md-3">
            <input type="text" id="sectionFilter" class="form-control"
                placeholder="Section...">
        </div>

        <!-- Button -->
        <div class="col-md-2 d-grid">
            <button class="btn btn-dark" onclick="filterTable()">
                <i class="bi bi-search"></i> Search
            </button>
        </div>

    </div>

</div>

    <!-- Main card component for student list table -->
    <div class="dashboard-card p-3 p-lg-4">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <div class="mt-2 mt-sm-0">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
                    <i class="bi bi-person-badge me-1"></i> Total: <span id="totalCount">{{ count($student) }}</span>
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
                                    <button class="btn-edit border-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editStudentModal{{ $students->id }}">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    
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

                        <!-- ================= EDIT STUDENT MODAL ================= -->
<div class="modal fade" id="editStudentModal{{ $students->id }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius: 1.25rem; overflow:hidden;">

      <!-- HEADER -->
      <div class="modal-header justify-content-center"
           style="background: linear-gradient(135deg, #0b1f3a, #1e4ed8);
                  color:white;
                  padding: 0.8rem 1rem;">

        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/logo.png') }}"
                 style="width:55px; height:55px; border-radius:50%; object-fit:cover;">

            <h6 class="modal-title mb-0 fw-semibold">
                Edit Student
            </h6>
        </div>

      </div>

      <!-- BODY -->
      <div class="modal-body p-4" style="background:#f8fafc;">

        <form method="POST" action="{{ route('students.update', $students->id) }}">
            @csrf
            @method('PUT')

            <div class="row g-3">

                <!-- First Name -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">First Name</label>
                    <input type="text"
                           name="first_name"
                           class="form-control"
                           value="{{ $students->first_name }}"
                           required>
                </div>

                <!-- Last Name -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Last Name</label>
                    <input type="text"
                           name="last_name"
                           class="form-control"
                           value="{{ $students->last_name }}"
                           required>
                </div>

                <!-- Year -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Year</label>
                    <select name="year" class="form-select" required>
                        <option value="">Select Year</option>
                        <option value="1" {{ $students->year == 1 ? 'selected' : '' }}>1st Year</option>
                        <option value="2" {{ $students->year == 2 ? 'selected' : '' }}>2nd Year</option>
                        <option value="3" {{ $students->year == 3 ? 'selected' : '' }}>3rd Year</option>
                        <option value="4" {{ $students->year == 4 ? 'selected' : '' }}>4th Year</option>
                    </select>
                </div>

                <!-- Section -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Section</label>
                    <input type="text"
                           name="section"
                           class="form-control"
                           value="{{ $students->section }}"
                           required>
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-end gap-2 mt-4">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="submit"
                        class="btn text-white"
                        style="background:#0b1f3a; padding:0.6rem 1.4rem; border-radius:10px;">
                    <i class="bi bi-check-circle"></i> Update
                </button>

            </div>

        </form>

      </div>

    </div>
  </div>
</div>

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

    
function filterTable() {

    let search = document.getElementById("searchInput").value.toLowerCase();
    let year = document.getElementById("yearFilter").value;
    let section = document.getElementById("sectionFilter").value.toLowerCase();

    let rows = document.querySelectorAll("tbody tr");
    let count = 0;

    rows.forEach(row => {

        let first = row.children[0].innerText.toLowerCase();
        let last = row.children[1].innerText.toLowerCase();
        let rowYear = row.children[2].innerText.trim();
        let rowSection = row.children[3].innerText.toLowerCase();

        let matchName = first.includes(search) || last.includes(search);
        let matchYear = year === "" || rowYear === year;
        let matchSection = rowSection.includes(section);

        if (matchName && matchYear && matchSection) {
            row.style.display = "";
            count++;
        } else {
            row.style.display = "none";
        }
    });

    document.getElementById("totalCount").innerText = count;
}
</script>
<!-- ================= ADD STUDENT MODAL ================= -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 1.25rem; overflow:hidden;">

<!-- HEADER -->
<div class="modal-header justify-content-center position-relative"
     style="background: linear-gradient(135deg, #0b1f3a, #1e4ed8);
            color:white;
            padding: 0.8rem 1rem;">

    <!-- CENTER CONTENT -->
    <div class="d-flex align-items-center gap-2">

        <!-- LOGO (smaller + tighter) -->
        <img src="{{ asset('images/logo.png') }}"
             alt="Logo"
             style="width:60px; height:60px; object-fit:cover; border-radius:50%;">

        <!-- TITLE (closer to logo) -->
        <h6 class="modal-title mb-0 fw-semibold" style="letter-spacing:0.3px;">
            Add Student
        </h6>

    </div>

</div>

      <!-- BODY -->
      <div class="modal-body p-4" style="background:#f8fafc;">

        <form method="post" action="{{ route('students.store') }}">
            @csrf
            @method('post')

            <!-- First Name -->
            <div class="mb-3">
                <label class="form-label fw-semibold">First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>

            <!-- Year -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Year</label>
                <select name="year" class="form-select" required>
                    <option value="">Select Year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>

            <!-- Section -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Section</label>
                <input type="text" name="section" class="form-control" required>
            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-end gap-2 mt-4">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="submit"
                        class="btn text-white"
                        style="background:#0b1f3a; padding:0.6rem 1.4rem; border-radius:10px;">
                    Save Student
                </button>

            </div>

        </form>

      </div>

    </div>
  </div>
</div>
</body>
</html>