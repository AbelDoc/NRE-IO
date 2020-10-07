export CXX = g++.exe
export LD = g++.exe

export CFLAGS = -pedantic -Wno-virtual-move-assign -Wall -Wextra -Wfloat-equal -Wstrict-overflow -Wshadow -Wconversion -Wunreachable-code -Wuninitialized -Winit-self -Werror -fstrict-overflow -O3 -std=c++20
export LDFLAGS = 

export INC = -I"C:\lib\MinGW64_10.2\include" -I"C:\Users\abell\Documents\GitHub\NRE-Core\src" 
export LIB = "-lmingw32" 
export LIBDIR = -L"C:\lib\MinGW64_10.2\lib" 

OBJDIR = obj/
BIN = bin/
SRC = src
OBJ = $(OBJDIR)NRE_Main.o 
OUT = NRE-IO

all : childs out

childs :
	@(cd $(SRC) && $(MAKE))

out : $(OBJ)
	@$(LD) $(LIBDIR) -o $(BIN)$(OUT) $^ $(LDFLAGS) $(LIB)
	@echo "Jobs done."

clean : 
	@echo "Clear of obj/"
	@rm -r obj
	@mkdir obj
	@echo "obj-Tree creation done."
	@echo "Clean done."
