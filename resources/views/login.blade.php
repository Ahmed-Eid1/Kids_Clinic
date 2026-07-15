<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Figtree:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

    h1,
    h2,
    .brand-font {
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

    .login-visual i.bi {
        font-size: 3rem;
        color: var(--gold);
        margin-bottom: 20px;
        position: relative;
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
        padding: 55px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-form-side h1 {
        color: var(--dark-brown);
        font-size: 2rem;
        margin-bottom: 6px;
    }

    .login-form-side .subtitle {
        color: #8a7a68;
        margin-bottom: 32px;
        font-size: 0.95rem;
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

    .form-control {
        border: 1.5px solid #e5dcc9;
        border-radius: 10px;
        padding: 12px 45px 12px 16px;
        background: #fff;
        font-size: 0.95rem;
        transition: all 0.25s ease;
    }

    .form-control:focus {
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(201, 162, 75, 0.15);
    }

    .form-control.is-invalid {
        border-color: #d9534f;
    }

    .input-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: #b9a689;
        pointer-events: none;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #b9a689;
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
    }

    .invalid-feedback {
        font-size: 0.8rem;
    }

    .form-check-label {
        font-size: 0.88rem;
        color: #6b5c4a;
    }

    .forgot-link {
        font-size: 0.88rem;
        color: var(--gold);
        text-decoration: none;
        font-weight: 500;
    }

    .forgot-link:hover {
        color: var(--dark-brown);
        text-decoration: underline;
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
        padding: 30px;

    }

    .divider {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 24px 0;
        color: #b9a689;
        font-size: 0.85rem;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e5dcc9;
    }

    .btn-social {
        border: 1.5px solid #e5dcc9;
        border-radius: 10px;
        padding: 10px;
        background: #fff;
        color: var(--dark-brown);
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-social:hover {
        border-color: var(--gold);
        background: #fdf9f0;
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
            <p>We believe every child deserves the best possible care. Our mission is to support healthy growth, early
                diagnosis, and effective treatment while giving families the confidence and guidance they need.</p>

            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Track your orders in real-time</span>
            </div>
            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Exclusive offers and discounts for members</span>
            </div>
            <div class="visual-feature">
                <i class="bi bi-check-circle-fill"></i>
                <span>Save your delivery address for faster orders</span>
            </div>
        </div>

        <!-- فورم تسجيل الدخول -->
        <div class="login-form-side">
            <h1 class="brand-font"> ....login now </h1>
            <br>
            <form id="loginForm" novalidate method="POST" action="">

                <div class="mb-3">
                    <label class="form-label"> : email </label>
                    <div class="input-group-custom">
                        <input type="email" name="email" id="emailField" class="form-control"
                            placeholder="example@email.com" required>
                        <i class="bi bi-envelope input-icon"></i>
                    </div>
                    <div class="text-danger invalid-feedback" id="emailError"></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">: password</label>
                    <div class="input-group-custom">
                        <input type="password" name="password" id="passwordField" class="form-control"
                            placeholder=".....password" required minlength="6">
                        <br>
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            <i class="bi bi-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                    <div class="text-danger invalid-feedback" id="passwordError"></div>
                </div>



                <button type="submit" class="btn btn-login w-100">
                    login <i class="bi bi-arrow-left ms-1"></i>
                </button>

                <div class="divider">or</div>

                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-social flex-fill">
                        <i class="bi bi-google me-1"></i> Google
                    </button>
                    <button type="button" class="btn btn-social flex-fill">
                        <i class="bi bi-facebook me-1"></i> Facebook
                    </button>
                </div>


            </form>
        </div>
    </div>
