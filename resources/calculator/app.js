/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
// require("select2/dist/js/select2");
window.moment = require("moment");
// require("bootstrap-daterangepicker/daterangepicker");

window.Vue = require("vue");
window.accounting = require("accounting-js");
// CommonJS
// window.Swal = require("sweetalert2");
// window.bsCustomFileInput = require("bs-custom-file-input");
// window.croppie = require("croppie");
// window.DataTable = require("datatables.net/js/jquery.dataTables.min.js");
// require("datatables.net-bs4/js/dataTables.bootstrap4.min.js");
// require("datatables.net-responsive/js/dataTables.responsive.min.js");
// require("datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js");

// window.Quill = require("quill/dist/quill.min.js");

// window.Chart = require("chart.js/dist/Chart.min.js");

// window.dateRanges = {
//     Today: [moment(), moment()],
//     Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
//     "Last 7 Days": [moment().subtract(6, "days"), moment()],
//     "Last 30 Days": [moment().subtract(29, "days"), moment()],
//     "This Month": [moment().startOf("month"), moment().endOf("month")],
//     "Last Month": [
//         moment()
//             .subtract(1, "month")
//             .startOf("month"),
//         moment()
//             .subtract(1, "month")
//             .endOf("month")
//     ],
//     "Last 12 Months": [
//         moment()
//             .subtract(11, "month")
//             .startOf("month"),
//         moment()
//     ]
// };

Vue.component("home", require("./components/Home.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});

require("./custom-script");
