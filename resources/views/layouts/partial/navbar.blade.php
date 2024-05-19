
<!DOCTYPE html>
<html lang="en">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="/blog">Lomo News</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title_page == "Blog") ? 'active' : ''  }}" href="/blog">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title_page == "Profile") ? 'active' : ''  }}" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title_page == "About") ? 'active' : ''  }}" href="/about">About</a>
          </li><!--
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>  !-->
        </ul>
      </div>
    </div>
</nav>