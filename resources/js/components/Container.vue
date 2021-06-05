<template>
    <div>
        <Navbar :user="user" />

        <Sidebar :user="user" />
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <slot name="breadcrumbs"></slot>
            <!-- Main content -->
            <section class="content">
                <slot name="content"></slot>
            </section>
            <!-- /.content -->
        </div>
        <Footer />
    </div>
</template>

<script>
import Navbar from './global/Navbar'
import Sidebar from './global/Sidebar'
import Footer from './global/Footer'
export default {
    name: "Container",
    props: ['user', 'breadcrumbs', 'domain'],
    components: { Footer, Sidebar, Navbar },
    mounted() {
        // Load Js Files
        const jquery = document.createElement("script");
        jquery.setAttribute('src', this.domain + '/assets/adminlte/plugins/jquery/jquery.min.js');
        jquery.async = true;
        document.body.appendChild(jquery);

        const bootstrap = document.createElement("script");
        bootstrap.setAttribute('src', this.domain + '/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');
        bootstrap.async = true;
        document.body.appendChild(bootstrap);

        const adminlte = document.createElement("script");
        adminlte.setAttribute('src', this.domain + '/assets/adminlte/dist/js/adminlte.min.js');
        adminlte.async = true;
        document.body.appendChild(adminlte);

        const overlayScrollBars = document.createElement("script");
        overlayScrollBars.setAttribute('src', this.domain + '/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');
        overlayScrollBars.async = true;
        document.body.appendChild(overlayScrollBars);
    }
}
</script>
