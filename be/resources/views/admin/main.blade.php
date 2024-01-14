@include('admin.parts.head')
<body>
  <section class="admin">
    <div class="row-grid">
      <div class="admin-sidebar">
            @include('admin.parts.sidebar')
      </div>
      <div class="admin-content">
        <div class="admin-content-top">
            @include('admin.parts.nav')
        </div>

        <div class="admin-content-main">
          <div class="admin-content-main-title">
            <h3>Dashboard</h3>
          </div>
          <br>
          <div class="admin-content-main-content">
            <!-- content -->
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('admin.parts.footer')
</body>
</html>
