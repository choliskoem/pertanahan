/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
$(document).ready(function () {
    $("#select-no-su").select2({
        ajax: {
            url: "/api/data",
            dataType: "json",
            delay: 250,
            processResults: function (data) {
                return {
                    results: data.items,
                };
            },
            cache: true,
        },
        minimumInputLength: 1,
    });
});

// $(document).ready(function () {
//     $("#kecamatan").on("change", function () {
//         var kecamatanID = $(this).val();
//         if (kecamatanID) {
//             $.ajax({
//                 url: "/get-kelurahans/" + kecamatanID,
//                 type: "GET",
//                 dataType: "json",
//                 success: function (data) {
//                     $("#kelurahan").empty();
//                     $("#kelurahan").append(
//                         '<option value="">Select Kelurahan</option>'
//                     );
//                     $.each(data, function (key, value) {
//                         $("#kelurahan").append(
//                             '<option value="' +
//                                 value.id_kelurahan +
//                                 '">' +
//                                 value.kelurahan +
//                                 "</option>"
//                         );
//                     });
//                 },
//             });
//         } else {
//             $("#kelurahan").empty();
//             $("#kelurahan").append(
//                 '<option value="">Select Kelurahan</option>'
//             );
//         }
//     });

//     $("#kelurahan").on("change", function () {
//         var kelurahanID = $(this).val();
//         if (kelurahanID) {
//             // Initialize select2 for surat_ukur
//             $(".surat_ukur").select2({
//                 ajax: {
//                     url: "/get-dokumens/" + kelurahanID,
//                     dataType: "json",
//                     // delay: 250,
//                     data: function (params) {
//                         return {
//                             q: params.term, // search term
//                         };
//                     },
//                     processResults: function (data) {
//                         return {
//                             results: $.map(data, function (item) {
//                                 return {
//                                     id: item.surat_ukur,
//                                     text: item.surat_ukur,
//                                 };
//                             }),
//                         };
//                     },
//                     // cache: true,
//                 },
//                 placeholder: "Select Surat Ukur",
//                 minimumInputLength: 1,
//             });

//             // Initialize select2 for nomor_hak
//             $(".nomor_hak").select2({
//                 ajax: {
//                     url: "/get-dokumens/" + kelurahanID,
//                     dataType: "json",
//                     // delay: 250,
//                     data: function (params) {
//                         return {
//                             q: params.term, // search term
//                         };
//                     },
//                     processResults: function (data) {
//                         return {
//                             results: $.map(data, function (item) {
//                                 return {
//                                     id: item.no_hak,
//                                     text: item.no_hak,
//                                 };
//                             }),
//                         };
//                     },
//                     // cache: true,
//                 },
//                 placeholder: "Select No Hak",
//                 minimumInputLength: 1,
//             });

//             // Fetch and populate additional fields
//             $.ajax({
//                 url: "/get-dokumens/" + kelurahanID,
//                 type: "GET",
//                 dataType: "json",
//                 success: function (data) {
//                     if (data.length > 0) {
//                         $("#rak").val(data[0].rak);
//                         $("#baris").val(data[0].baris);
//                         $("#kolom").val(data[0].kolom);
//                         $("#bundle").val(data[0].bundle);
//                     }
//                 },
//             });
//         } else {
//             $("#surat_ukur")
//                 .empty()
//                 .append('<option value="">Select Surat Ukur</option>');
//             $("#nomor_hak")
//                 .empty()
//                 .append('<option value="">Select No Hak</option>');
//         }
//     });
// });

$(document).ready(function () {
    $("#kecamatan").on("change", function () {
        var kecamatanID = $(this).val();
        if (kecamatanID) {
            $.ajax({
                url: "/get-kelurahans/" + kecamatanID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $("#kelurahan").empty();
                    $("#kelurahan").append(
                        '<option value="">Select Kelurahan</option>'
                    );
                    $.each(data, function (key, value) {
                        $("#kelurahan").append(
                            '<option value="' +
                                value.id_kelurahan +
                                '">' +
                                value.kelurahan +
                                "</option>"
                        );
                    });
                },
            });
        } else {
            $("#kelurahan").empty();
            $("#kelurahan").append(
                '<option value="">Select Kelurahan</option>'
            );
        }
    });

    $("#kelurahan").on("change", function () {
        var kelurahanID = $(this).val();
        if (kelurahanID) {
            $.ajax({
                url: "/get-dokumens/" + kelurahanID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $("#surat_ukur").empty();
                    $("#nomor_hak").empty();
                    $("#surat_ukur").append(
                        '<option value="">Select Surat Ukur</option>'
                    );
                    $("#nomor_hak").append(
                        '<option value="">Select Nomor Hak</option>'
                    );
                    $.each(data, function (key, value) {
                        $("#surat_ukur").append(
                            '<option value="' +
                                value.surat_ukur +
                                '" data-rak="' +
                                value.rak +
                                '" data-baris="' +
                                value.baris +
                                '" data-kolom="' +
                                value.kolom +
                                '" data-bundle="' +
                                value.bundle +
                                '">' +
                                value.surat_ukur +
                                "</option>"
                        );
                        $("#nomor_hak").append(
                            '<option value="' +
                                value.no_hak +
                                '" data-rak="' +
                                value.rak +
                                '" data-baris="' +
                                value.baris +
                                '" data-kolom="' +
                                value.kolom +
                                '" data-bundle="' +
                                value.bundle +
                                '">' +
                                value.no_hak +
                                "</option>"
                        );
                    });
                },
            });
        } else {
            $("#surat_ukur").empty();
            $("#nomor_hak").empty();
            $("#surat_ukur").append(
                '<option value="">Select Surat Ukur</option>'
            );
            $("#nomor_hak").append(
                '<option value="">Select Nomor Hak</option>'
            );
        }
    });

    $("#surat_ukur, #nomor_hak").on("change", function () {
        var selectedOption = $(this).find("option:selected");
        var rak = selectedOption.data("rak");
        var baris = selectedOption.data("baris");
        var kolom = selectedOption.data("kolom");
        var bundle = selectedOption.data("bundle");

        $("#rak").val(rak);
        $("#baris").val(baris);
        $("#kolom").val(kolom);
        $("#bundle").val(bundle);
    });
});

$(document).ready(function () {
    $("#table-pinjam").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-list").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-pinjam2").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-dikirim").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-pengembalian").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-pengembalian2").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});

$(document).ready(function () {
    $("#table-selesai").DataTable({
        responsive: true,
        autoFill: true,
        fixedHeader: true,
        fixedColumns: true,
        scrollX: true,
        scroller: true,
    });
});
