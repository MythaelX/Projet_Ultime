/****************************************************************************
** Meta object code from reading C++ file 'MainWindow.h'
**
** Created by: The Qt Meta Object Compiler version 67 (Qt 5.5.1)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "MainWindow.h"
#include <QtCore/qbytearray.h>
#include <QtCore/qmetatype.h>
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'MainWindow.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 67
#error "This file was generated using the moc from 5.5.1. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
struct qt_meta_stringdata_MainWindow_t {
    QByteArrayData data[16];
    char stringdata0[143];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_MainWindow_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_MainWindow_t qt_meta_stringdata_MainWindow = {
    {
QT_MOC_LITERAL(0, 0, 10), // "MainWindow"
QT_MOC_LITERAL(1, 11, 11), // "connections"
QT_MOC_LITERAL(2, 23, 0), // ""
QT_MOC_LITERAL(3, 24, 12), // "changeActive"
QT_MOC_LITERAL(4, 37, 5), // "state"
QT_MOC_LITERAL(5, 43, 11), // "std::string"
QT_MOC_LITERAL(6, 55, 5), // "table"
QT_MOC_LITERAL(7, 61, 6), // "size_t"
QT_MOC_LITERAL(8, 68, 5), // "index"
QT_MOC_LITERAL(9, 74, 13), // "addingWidgets"
QT_MOC_LITERAL(10, 88, 11), // "deleteEntry"
QT_MOC_LITERAL(11, 100, 11), // "updateEntry"
QT_MOC_LITERAL(12, 112, 8), // "updEntry"
QT_MOC_LITERAL(13, 121, 8), // "addEntry"
QT_MOC_LITERAL(14, 130, 4), // "quit"
QT_MOC_LITERAL(15, 135, 7) // "toAdmin"

    },
    "MainWindow\0connections\0\0changeActive\0"
    "state\0std::string\0table\0size_t\0index\0"
    "addingWidgets\0deleteEntry\0updateEntry\0"
    "updEntry\0addEntry\0quit\0toAdmin"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_MainWindow[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
      11,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: name, argc, parameters, tag, flags
       1,    0,   69,    2, 0x0a /* Public */,
       3,    3,   70,    2, 0x0a /* Public */,
       9,    2,   77,    2, 0x0a /* Public */,
      10,    2,   82,    2, 0x0a /* Public */,
      11,    2,   87,    2, 0x0a /* Public */,
      12,    2,   92,    2, 0x0a /* Public */,
      13,    2,   97,    2, 0x0a /* Public */,
      14,    0,  102,    2, 0x0a /* Public */,
      15,    2,  103,    2, 0x0a /* Public */,
      15,    1,  108,    2, 0x2a /* Public | MethodCloned */,
      15,    0,  111,    2, 0x2a /* Public | MethodCloned */,

 // slots: parameters
    QMetaType::Void,
    QMetaType::Void, QMetaType::Int, 0x80000000 | 5, 0x80000000 | 7,    4,    6,    8,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void,
    QMetaType::Void, 0x80000000 | 5, 0x80000000 | 7,    6,    8,
    QMetaType::Void, 0x80000000 | 5,    6,
    QMetaType::Void,

       0        // eod
};

void MainWindow::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        MainWindow *_t = static_cast<MainWindow *>(_o);
        Q_UNUSED(_t)
        switch (_id) {
        case 0: _t->connections(); break;
        case 1: _t->changeActive((*reinterpret_cast< int(*)>(_a[1])),(*reinterpret_cast< std::string(*)>(_a[2])),(*reinterpret_cast< size_t(*)>(_a[3]))); break;
        case 2: _t->addingWidgets((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 3: _t->deleteEntry((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 4: _t->updateEntry((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 5: _t->updEntry((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 6: _t->addEntry((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 7: _t->quit(); break;
        case 8: _t->toAdmin((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< size_t(*)>(_a[2]))); break;
        case 9: _t->toAdmin((*reinterpret_cast< std::string(*)>(_a[1]))); break;
        case 10: _t->toAdmin(); break;
        default: ;
        }
    }
}

const QMetaObject MainWindow::staticMetaObject = {
    { &Window::staticMetaObject, qt_meta_stringdata_MainWindow.data,
      qt_meta_data_MainWindow,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *MainWindow::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *MainWindow::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_MainWindow.stringdata0))
        return static_cast<void*>(const_cast< MainWindow*>(this));
    return Window::qt_metacast(_clname);
}

int MainWindow::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = Window::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 11)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 11;
    } else if (_c == QMetaObject::RegisterMethodArgumentMetaType) {
        if (_id < 11)
            *reinterpret_cast<int*>(_a[0]) = -1;
        _id -= 11;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
