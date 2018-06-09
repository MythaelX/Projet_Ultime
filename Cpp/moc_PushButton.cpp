/****************************************************************************
** Meta object code from reading C++ file 'PushButton.hpp'
**
** Created by: The Qt Meta Object Compiler version 67 (Qt 5.5.1)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "PushButton.hpp"
#include <QtCore/qbytearray.h>
#include <QtCore/qmetatype.h>
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'PushButton.hpp' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 67
#error "This file was generated using the moc from 5.5.1. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
struct qt_meta_stringdata_PushButton_t {
    QByteArrayData data[7];
    char stringdata0[50];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_PushButton_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_PushButton_t qt_meta_stringdata_PushButton = {
    {
QT_MOC_LITERAL(0, 0, 10), // "PushButton"
QT_MOC_LITERAL(1, 11, 7), // "clicked"
QT_MOC_LITERAL(2, 19, 0), // ""
QT_MOC_LITERAL(3, 20, 11), // "std::string"
QT_MOC_LITERAL(4, 32, 5), // "table"
QT_MOC_LITERAL(5, 38, 5), // "index"
QT_MOC_LITERAL(6, 44, 5) // "click"

    },
    "PushButton\0clicked\0\0std::string\0table\0"
    "index\0click"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_PushButton[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
       2,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       1,       // signalCount

 // signals: name, argc, parameters, tag, flags
       1,    2,   24,    2, 0x06 /* Public */,

 // slots: name, argc, parameters, tag, flags
       6,    0,   29,    2, 0x0a /* Public */,

 // signals: parameters
    QMetaType::Void, 0x80000000 | 3, 0x80000000 | 3,    4,    5,

 // slots: parameters
    QMetaType::Void,

       0        // eod
};

void PushButton::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        PushButton *_t = static_cast<PushButton *>(_o);
        Q_UNUSED(_t)
        switch (_id) {
        case 0: _t->clicked((*reinterpret_cast< std::string(*)>(_a[1])),(*reinterpret_cast< std::string(*)>(_a[2]))); break;
        case 1: _t->click(); break;
        default: ;
        }
    } else if (_c == QMetaObject::IndexOfMethod) {
        int *result = reinterpret_cast<int *>(_a[0]);
        void **func = reinterpret_cast<void **>(_a[1]);
        {
            typedef void (PushButton::*_t)(std::string , std::string );
            if (*reinterpret_cast<_t *>(func) == static_cast<_t>(&PushButton::clicked)) {
                *result = 0;
            }
        }
    }
}

const QMetaObject PushButton::staticMetaObject = {
    { &QPushButton::staticMetaObject, qt_meta_stringdata_PushButton.data,
      qt_meta_data_PushButton,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *PushButton::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *PushButton::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_PushButton.stringdata0))
        return static_cast<void*>(const_cast< PushButton*>(this));
    return QPushButton::qt_metacast(_clname);
}

int PushButton::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QPushButton::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 2)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 2;
    } else if (_c == QMetaObject::RegisterMethodArgumentMetaType) {
        if (_id < 2)
            *reinterpret_cast<int*>(_a[0]) = -1;
        _id -= 2;
    }
    return _id;
}

// SIGNAL 0
void PushButton::clicked(std::string _t1, std::string _t2)
{
    void *_a[] = { Q_NULLPTR, const_cast<void*>(reinterpret_cast<const void*>(&_t1)), const_cast<void*>(reinterpret_cast<const void*>(&_t2)) };
    QMetaObject::activate(this, &staticMetaObject, 0, _a);
}
struct qt_meta_stringdata_RedPushButton_t {
    QByteArrayData data[1];
    char stringdata0[14];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_RedPushButton_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_RedPushButton_t qt_meta_stringdata_RedPushButton = {
    {
QT_MOC_LITERAL(0, 0, 13) // "RedPushButton"

    },
    "RedPushButton"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_RedPushButton[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
       0,    0, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

       0        // eod
};

void RedPushButton::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    Q_UNUSED(_o);
    Q_UNUSED(_id);
    Q_UNUSED(_c);
    Q_UNUSED(_a);
}

const QMetaObject RedPushButton::staticMetaObject = {
    { &PushButton::staticMetaObject, qt_meta_stringdata_RedPushButton.data,
      qt_meta_data_RedPushButton,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *RedPushButton::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *RedPushButton::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_RedPushButton.stringdata0))
        return static_cast<void*>(const_cast< RedPushButton*>(this));
    return PushButton::qt_metacast(_clname);
}

int RedPushButton::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = PushButton::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    return _id;
}
struct qt_meta_stringdata_GreyPushButton_t {
    QByteArrayData data[1];
    char stringdata0[15];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_GreyPushButton_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_GreyPushButton_t qt_meta_stringdata_GreyPushButton = {
    {
QT_MOC_LITERAL(0, 0, 14) // "GreyPushButton"

    },
    "GreyPushButton"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_GreyPushButton[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
       0,    0, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

       0        // eod
};

void GreyPushButton::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    Q_UNUSED(_o);
    Q_UNUSED(_id);
    Q_UNUSED(_c);
    Q_UNUSED(_a);
}

const QMetaObject GreyPushButton::staticMetaObject = {
    { &PushButton::staticMetaObject, qt_meta_stringdata_GreyPushButton.data,
      qt_meta_data_GreyPushButton,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *GreyPushButton::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *GreyPushButton::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_GreyPushButton.stringdata0))
        return static_cast<void*>(const_cast< GreyPushButton*>(this));
    return PushButton::qt_metacast(_clname);
}

int GreyPushButton::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = PushButton::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    return _id;
}
struct qt_meta_stringdata_GreenPushButton_t {
    QByteArrayData data[1];
    char stringdata0[16];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_GreenPushButton_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_GreenPushButton_t qt_meta_stringdata_GreenPushButton = {
    {
QT_MOC_LITERAL(0, 0, 15) // "GreenPushButton"

    },
    "GreenPushButton"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_GreenPushButton[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
       0,    0, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

       0        // eod
};

void GreenPushButton::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    Q_UNUSED(_o);
    Q_UNUSED(_id);
    Q_UNUSED(_c);
    Q_UNUSED(_a);
}

const QMetaObject GreenPushButton::staticMetaObject = {
    { &PushButton::staticMetaObject, qt_meta_stringdata_GreenPushButton.data,
      qt_meta_data_GreenPushButton,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *GreenPushButton::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *GreenPushButton::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_GreenPushButton.stringdata0))
        return static_cast<void*>(const_cast< GreenPushButton*>(this));
    return PushButton::qt_metacast(_clname);
}

int GreenPushButton::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = PushButton::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    return _id;
}
QT_END_MOC_NAMESPACE
