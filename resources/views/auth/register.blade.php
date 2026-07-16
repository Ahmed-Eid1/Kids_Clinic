<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />

    <style>
    :root {
        --gold: #c9a24b;
        --gold-light: #e0c179;
        --dark-brown: #2b1d13;
        --green: #1d3222;
        --cream: #faf6ef;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }

    h1, h2, .brand-font {
        font-family: 'Playfair Display', serif;
    }

    body {
        background: linear-gradient(135deg, var(--dark-brown) 30%, #494710 80%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        margin: 0;
    }

    .login-wrapper {
        width: 100%;
        max-width: 950px;
        background: var(--cream);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
        display: flex;
        min-height: 560px;
    }

    .login-visual {
        flex: 1;
        background: linear-gradient(160deg, var(--dark-brown), #634227 40%);
        color: var(--cream);
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .login-visual::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 162, 75, 0.25) 0%, transparent 70%);
        top: -100px;
        right: -100px;
    }

    .login-visual::after {
        content: '';
        position: absolute;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 162, 75, 0.15) 0%, transparent 70%);
        bottom: -80px;
        left: -80px;
    }

    .login-visual h2 {
        color: var(--gold-light);
        font-size: 2.1rem;
        margin-bottom: 15px;
        position: relative;
    }

    .login-visual p {
        color: #d8c9b5;
        font-size: 0.95rem;
        line-height: 1.8;
        position: relative;
    }

    .visual-feature {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 18px;
        position: relative;
        color: #e8dcc8;
        font-size: 0.9rem;
    }

    .visual-feature i {
        color: var(--gold);
        font-size: 1.1rem;
    }

    .login-form-side {
        flex: 1.1;
        padding: 40px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-height: 90vh;
        overflow-y: auto;
    }

    .login-form-side h1 {
        color: var(--dark-brown);
        font-size: 2rem;
        margin-bottom: 6px;
    }

    .form-label {
        color: var(--dark-brown);
        font-weight: 500;
        font-size: 0.9rem;
        margin-bottom: 6px;
    }

    .input-group-custom {
        position: relative;
    }

    .form-control, .form-select {
        border: 1.5px solid #e5dcc9;
        border-radius: 10px;
        padding: 12px 16px;
        background: #fff;
        font-size: 0.95rem;
        transition: all 0.25s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(201, 162, 75, 0.15);
    }

    .form-control.is-invalid, .form-select.is-invalid {
        border-color: #d9534f;
    }

    .btn-login {
        background: var(--dark-brown);
        color: var(--cream);
        border: none;
        border-radius: 10px;
        padding: 13px;
        font-weight: 600;
        font-size: 1rem;
        letter-spacing: 0.3px;
        transition: all 0.25s ease;
    }

    .btn-login:hover {
        background: var(--gold);
        color: var(--dark-brown);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(201, 162, 75, 0.35);
    }

    .login-visual .fa-hospital {
        width: 50px !important;
        height: 50px !important;
        padding: 30px 0;
        font-size: 3rem;
    }

    .signup-text {
        text-align: center;
        margin-top: 28px;
        font-size: 0.9rem;
        color: #6b5c4a;
    }

    .signup-text a {
        color: var(--gold);
        font-weight: 600;
        text-decoration: none;
    }

    .signup-text a:hover {
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        .login-wrapper {
            flex-direction: column;
            min-height: auto;
        }

        .login-visual {
            padding: 35px 30px;
            text-align: center;
        }

        .login-visual::before,
        .login-visual::after {
            display: none;
        }

        .login-form-side {
            padding: 35px 28px;
        }
    }
    </style>
</head>

<body>

    <div class="login-wrapper">
        <div class="login-visual">
            <i class="fa-solid fa-hospital" style="color:var(--gold)"></i>
            <h2 class=" brand-font"> Little Roots</h2>
            <p>Join our family today. Register to book appointments, track your child's health records, and access personalized care recommendations.</p>

            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Easy Appointment Booking</span>
            </div>
            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Secure Health Records</span>
            </div>
            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Direct Communication with Doctors</span>
            </div>
        </div>

        <div class="login-form-side">
            <h1 class="brand-font"> Register Now </h1>
            <br>
            <form id="registerForm" novalidate method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            placeholder="01XXXXXXXXX" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                            value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address (Optional)</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                            value="{{ old('address') }}">
                        @error('address')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-login w-100 mt-2">
                    Register
                </button>

                <div class="signup-text">
                    Already have an account? <a href="{{ route('login') }}">Login here</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
