<?php

return [
    'userManagement' => [
        'title'          => 'Kelola Pengguna',
        'title_singular' => 'Kelola Pengguna',
    ],
    'permission'     => [
        'title'          => 'Perijinan',
        'title_singular' => 'Perijinan',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Judul',
            'title_helper'      => '',
            'created_at'        => 'Buat',
            'created_at_helper' => '',
            'updated_at'        => 'Unggah',
            'updated_at_helper' => '',
            'deleted_at'        => 'Hapus',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Peran',
        'title_singular' => 'Peran',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Judul',
            'title_helper'       => '',
            'permissions'        => 'Perijinan',
            'permissions_helper' => '',
            'created_at'         => 'Buat',
            'created_at_helper'  => '',
            'updated_at'         => 'Unggah',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Hapus',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Pengguna',
        'title_singular' => 'Pengguna',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nama',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Verifikasi Email',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Peran',
            'roles_helper'             => '',
            'remember_token'           => 'Token Pengingat',
            'remember_token_helper'    => '',
            'created_at'               => 'Buat',
            'created_at_helper'        => '',
            'updated_at'               => 'Unggah',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Hapus',
            'deleted_at_helper'        => '',
        ],
    ],
    'status'         => [
        'title'          => 'Status',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nama',
            'name_helper'       => '',
            'color'             => 'warna',
            'color_helper'      => '',
            'created_at'        => 'Buat',
            'created_at_helper' => '',
            'updated_at'        => 'Unggah',
            'updated_at_helper' => '',
            'deleted_at'        => 'Hapus',
            'deleted_at_helper' => '',
        ],
    ],
    'priority'       => [
        'title'          => 'Prioritas',
        'title_singular' => 'Prioritas',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nama',
            'name_helper'       => '',
            'color'             => 'warna',
            'color_helper'      => '',
            'created_at'        => 'Buat',
            'created_at_helper' => '',
            'updated_at'        => 'Unggah',
            'updated_at_helper' => '',
            'deleted_at'        => 'Hapus',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Kategori',
        'title_singular' => 'Kategori',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nama',
            'name_helper'       => '',
            'color'             => 'Warna',
            'color_helper'      => '',
            'created_at'        => 'Buat',
            'created_at_helper' => '',
            'updated_at'        => 'Unggah',
            'updated_at_helper' => '',
            'deleted_at'        => 'Hapus',
            'deleted_at_helper' => '',
        ],
    ],
    'ticket'         => [
        'title'          => 'Tiket',
        'title_singular' => 'Tiket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Judul',
            'title_helper'            => '',
            'content'                 => 'Konten',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Prioritas',
            'priority_helper'         => '',
            'category'                => 'Kategori',
            'category_helper'         => '',
            'author_name'             => 'Nama Pembuat',
            'author_name_helper'      => '',
            'author_email'            => 'Email Pembuat',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Ditujukan ke',
            'assigned_to_user_helper' => '',
            'comments'                => 'Komentar',
            'comments_helper'         => '',
            'created_at'              => 'Buat',
            'created_at_helper'       => '',
            'updated_at'              => 'Unggah',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Hapus',
            'deleted_at_helper'       => '',
            'attachments'             => 'File',
            'attachments_helper'      => '',
        ],
    ],
    'comment'        => [
        'title'          => 'Komentar',
        'title_singular' => 'Komentar',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Tiket',
            'ticket_helper'       => '',
            'author_name'         => 'Nama Pembuat',
            'author_name_helper'  => '',
            'author_email'        => 'Email Pembuat',
            'author_email_helper' => '',
            'user'                => 'Pengguna',
            'user_helper'         => '',
            'comment_text'        => 'Pesan Komentar',
            'comment_text_helper' => '',
            'created_at'          => 'Buat',
            'created_at_helper'   => '',
            'updated_at'          => 'Unggah',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Hapus',
            'deleted_at_helper'   => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Catatan Audit',
        'title_singular' => 'Catatan Audit',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Deskripsi',
            'description_helper'  => '',
            'subject_id'          => 'ID Subyek',
            'subject_id_helper'   => '',
            'subject_type'        => 'Tipe Subyek',
            'subject_type_helper' => '',
            'user_id'             => 'ID Pengguna',
            'user_id_helper'      => '',
            'properties'          => 'Properti',
            'properties_helper'   => '',
            'host'                => 'Pemilik',
            'host_helper'         => '',
            'created_at'          => 'Buat',
            'created_at_helper'   => '',
            'updated_at'          => 'Unggah',
            'updated_at_helper'   => '',
        ],
    ],
];
