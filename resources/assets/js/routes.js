import login from './components/login_register/Login.vue';

import dashboard from './components/dashboard/Dashboard.vue';
//========= NHAN SU =========
import phongban from './components/nhansu/phongban/PhongBan.vue';
import bophan from './components/nhansu/bophan/BoPhan.vue';
import bangluong from './components/nhansu/bangluong/BangLuong.vue';
import bangthuong from './components/nhansu/bangthuong/BangThuong.vue';
import mainnhanvien from './components/nhansu/danhsachnhanvien/MainNhanVien';
import danhsachnhanvien from './components/nhansu/danhsachnhanvien/DanhSachNhanVien.vue';
import thongtinnhanvien from './components/nhansu/danhsachnhanvien/ThongTinNhanVien.vue';

//========= NHAN SU =========
import thongtinsanpham from './components/sanpham/ThongTinSanPham';

export const routes = [
    {
        path: '/',
        component: login
    },
    {
        path: '/dashboard',
        component: dashboard,
        meta: { requiresAuth: true }
    },
    {
        path: '/phongban',
        component: phongban
    },
    {
        path: '/bophan',
        component: bophan
    },
    {
        path: '/bangluong',
        component: bangluong
    },
    {
        path: '/bangthuong',
        component: bangthuong
    },
    {
        path: '/danhsachnhanvien',
        component: mainnhanvien,
        children: [
            {
                path: '/',
                component: danhsachnhanvien
            },
            {
                path: '/themmoi',
                component: thongtinnhanvien
            },
            {
                path: ':id',
                component: thongtinnhanvien
            }
        ]
    },
    {
        path: '/thongtinsanpham',
        component: thongtinsanpham
    }
]
