<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">ChronosEnterprise</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Employee") ? 'active' : '' }}" href="/employees">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Account") ? 'active' : '' }}" href="/accounts">Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
