.PHONY: clean, mrproper, edit, create, createSFML, createSFMLOPENGL, createQt, qt, remake, gdb, qtClean, qtInstall
.SUFFIXES:

CC = g++
CFLAGS = -Wall -Wextra -Wconversion -std=c++14 -Os
GCFLAGS = -g $(CFLAGS)

SFMLLIBS = -lsfml-graphics -lsfml-window -lsfml-system -lsfml-network -lsfml-audio
BDDLIBS = -lmysqlcppconn
CXXLIBS = -lm -pthread -lpthread -Wl,--no-as-needed
LDFLAGS = $(SFMLLIBS) $(BDDLIBS) $(CXXLIBS)

MAINFILE = main.cpp
FUNCTFILEC = functions.cpp
FUNCTFILEH = functions.hpp
OPENGLH = OpenGL.hpp
OPENGLC = OpenGL.cpp

SFMLIN = ~/Bureau/Algo/SFMLWidgetsTests/SFML
SFMLOUT = ./SFML

CPPIN = ~/Bureau/Algo/C++Tests/C++
CPPOUT = ./C++

QTIN = ~/Bureau/Algo/QTTests/Widgets
QTOUT = ./Widgets

MAINWINDOWH = MainWindow.h
MAINWINDOWC = MainWindow.cpp

PROJECTFILE = $(wildcard *.pro)
QTLIBS = $(BDDLIBS) $(CXXLIBS)

all:
	$(CC) -c *.cpp */*.cpp $(CFLAGS)
	$(CC) -o prog *.o $(LDFLAGS)
time:
	time --quiet -v $(CC) -c *.cpp */*.cpp $(CFLAGS)
	time --quiet -v $(CC) -o prog *.o $(LDFLAGS)
qt:
	qmake -project
	echo "\nQT += gui core widgets" >> $(PROJECTFILE)
	qmake
	$(MAKE) -f Makefile all SUBLIBS="$(QTLIBS)"
gdb:
	$(CC) -c *.cpp */*.cpp $(GCFLAGS)
	$(CC) -o prog *.o $(LDFLAGS)
	gdb prog
create:
	if [ -f $(MAINFILE) ];then echo ""; else echo "#include \"functions.hpp\"\n\nint main(int argc, char **argv){\n\targuments.addProg(argc, argv);\n\n\tstd::cout << \"Hello World !\" << std::endl;\n\t\n\treturn 0;\n}" > $(MAINFILE); fi
	if [ -f $(FUNCTFILEC) ];then echo ""; else echo "#include \"functions.hpp\"\n\n" > $(FUNCTFILEC); fi
	if [ -f $(FUNCTFILEH) ];then echo ""; else echo "#ifndef HEADER_FUNCTIONS\n#define HEADER_FUNCTIONS\n\n#include \"C++/C++.hpp\"\n\n\n\n#endif //HEADER_FUNCTIONS" > $(FUNCTFILEH); fi
	ln -s $(CPPIN) $(CPPOUT)
createSFML:
	if [ -f $(MAINFILE) ];then echo ""; else echo "#include \"functions.hpp\"\n\nconst int WIDTH = 640;\nconst int HEIGHT = 480;\n\nint main(int argc, char** argv){\n\targuments.addProg(argc, argv);\n\n\tsf::RenderWindow screen(sf::VideoMode(WIDTH, HEIGHT), \"SFML Window\");\n\tsf::Event event;\n\t\n\twhile(screen.isOpen()){\n\t\twhile(screen.pollEvent(event)){\n\t\t\tif(event.type == sf::Event::Closed){\n\t\t\t\tscreen.close();\n\t\t\t}\n\t\t}\n\t\t\n\t\tscreen.clear();\n\t\t\n\t\t\n\t\t\n\t\tscreen.display();\n\t}\n\t\n\treturn 0;\n}" > $(MAINFILE); fi
	if [ -f $(FUNCTFILEC) ];then echo ""; else echo "#include \"functions.hpp\"\n\n" > $(FUNCTFILEC); fi
	if [ -f $(FUNCTFILEH) ];then echo ""; else echo "#ifndef HEADER_FUNCTIONS\n#define HEADER_FUNCTIONS\n\n#include \"C++/C++.hpp\"\n#include \"SFML/SfmlWidgets.hpp\"\n\n\n\n#endif //HEADER_FUNCTIONS" > $(FUNCTFILEH); fi
	ln -s $(CPPIN) $(CPPOUT)
	ln -s $(SFMLIN) $(SFMLOUT)
createSFMLOPENGL:
	if [ -f $(MAINFILE) ];then echo ""; else echo "#include \"functions.hpp\"\n\nconst int WIDTH = 640;\nconst int HEIGHT = 480;\n\nint main(int argc, char** argv){\n\targuments.addProg(argc, argv);\n\n\tsf::RenderWindow screen(sf::VideoMode(WIDTH, HEIGHT), \"SFML/OpenGL Window\");\n\tsf::Event event;\n\t\n\tbool loop = true;\n\t\t\n\tSFMLOpenGL::init(event);\n\t\n\twhile(loop){\n\t\twhile(screen.pollEvent(event)){\n\t\t\tif(event.type == sf::Event::Closed){\n\t\t\t\tloop = false;\n\t\t\t}\n\t\t}\n\t\t\n\t\tSFMLOpenGL::clear(event);\n\t\t\n\t\t\n\t\t\n\t\tSFMLOpenGL::display(event);\n\t}\n\t\n\tscreen.close();\n\t\n\treturn 0;\n}" > $(MAINFILE); fi
	if [ -f $(FUNCTFILEC) ];then echo ""; else echo "#include \"functions.hpp\"\n\n" > $(FUNCTFILEC); fi
	if [ -f $(FUNCTFILEH) ];then echo ""; else echo "#ifndef HEADER_FUNCTIONS\n#define HEADER_FUNCTIONS\n\n#include \"C++/C++.hpp\"\n#include \"SFML/SfmlWidgets.hpp\"\n#include \"OpenGL.hpp\"\n\n\n\n#endif //HEADER_FUNCTIONS" > $(FUNCTFILEH); fi
	if [ -f $(OPENGLH) ];then echo ""; else echo "#ifndef OPENGL_HEADER\n#define OPENGL_HEADER\n\n#include <SFML/Graphics.hpp>\n#include <SFML/Window.hpp>\n#include <SFML/System.hpp>\n#include <SFML/Network.hpp>\n#include <SFML/Audio.hpp>\n#include <SFML/OpenGL.hpp>\n\n#include <GL/gl.h>\n#include <GL/glu.h>\n\nclass SFMLOpenGL {\n\tpublic:\n\t\tSFMLOpenGL(){}\n\t\t\n\t\tstatic void init(sf::RenderWindow& screen, int width, int height);\n\t\tstatic void clear(sf::RenderWindow& screen);\n\t\tstatic void display(sf::RenderWindow& screen);\n\tprotected:\n};\n\n#endif //OPENGL_HEADER" > $(OPENGLH); fi
	if [ -f $(OPENGLC) ];then echo ""; else echo "#include \"OpenGL.hpp\"\n\nvoid SFMLOpenGL::init(sf::RenderWindow& screen, int width, int height){\n\tscreen.setVerticalSyncEnabled(true);\n\tscreen.setActive(true);\n\t\tglMatrixMode(GL_PROJECTION);\n\t\tglLoadIdentity();\n\n\t\tgluPerspective(70, static_cast<double>(width)/height, 1, 10000);\n\t\tglEnable(GL_DEPTH_TEST);\n\n\t\tglMatrixMode(GL_MODELVIEW);\n\t\tglLoadIdentity();\n\n\t\tglEnable(GL_TEXTURE_2D);\n\t\tglEnable(GL_COLOR_MATERIAL);\n\tscreen.setActive(false);\n}\n\nvoid SFMLOpenGL::clear(sf::RenderWindow& screen){\n\tscreen.setActive(true);\n\t\tglClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);\n\t\tscreen.pushGLStates();\n\tscreen.setActive(false);\n}\n\nvoid SFMLOpenGL::display(sf::RenderWindow& screen){\n\tscreen.setActive(true);\n\t\tscreen.popGLStates();\n\tscreen.setActive(false);\n\t\n\tscreen.display();\n}" > $(OPENGLC); fi
	ln -s $(SFMLIN) $(SFMLOUT)
	ln -s $(CPPIN) $(CPPOUT)
createQt:
	if [ -f $(MAINFILE) ];then echo ""; else echo "#include <QApplication>\n\n#include \"Widgets/C++/C++.hpp\"\n#include \"MainWindow.h\"\n\nint main(int argc, char** argv) {\n\targuments.addProg(argc, argv);\n\n\tQApplication app(argc, argv);\n\tMainWindow w;\n\t\n\tw.show();\n\t\n\treturn app.exec();\n}" > $(MAINFILE); fi
	if [ -f $(MAINWINDOWC) ];then echo ""; else echo "#include \"MainWindow.h\"\n\nMainWindow::MainWindow(QWidget* parent) :\n\tQMainWindow(parent)\n{\n\t\n}\n\nMainWindow::~MainWindow(){\n\t\n}" > $(MAINWINDOWC); fi
	if [ -f $(MAINWINDOWH) ];then echo ""; else echo "#ifndef HEADER_MAINWINDOW\n#define HEADER_MAINWINDOW\n\n#include <QtWidgets>\n#include "Widgets/QtDefines.hpp"\n\nclass MainWindow : public QMainWindow {\n\tQ_OBJECT\n\tpublic:\n\t\tMainWindow(QWidget* parent = NULL);\n\t\t~MainWindow();\n\t\n\tpublic slots:\n\t\t\n\t\t\n\tsignals:\n\t\t\n\t\t\n\tprivate:\n\t\t\n};\n\n#endif //HEADER_MAINWINDOW" > $(MAINWINDOWH); fi
	ln -s $(QTIN) $(QTOUT)
edit:
	if [ -f $(MAINFILE) ];then gedit $(MAINFILE) & else echo ""; fi
	if [ -f $(FUNCTFILEH) ];then gedit $(FUNCTFILEH) & else echo ""; fi
	if [ -f $(FUNCTFILEC) ];then gedit $(FUNCTFILEC) & else echo ""; fi
clean:
	clear
	rm -rf *.o
qtClean:
	clear
	make -f Makefile clean
	rm -rf *.o
mrproper: clean
	rm -rf prog
install: clean all
	rm -rf *.o
	./prog
qtInstall: qtClean qt qtClean
remake: mrproper all
