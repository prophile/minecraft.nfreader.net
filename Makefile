TARGETS=index.html chat.html

all: $(TARGETS)

%.html: %.html.fragment header.html.fragment footer.html.fragment
	cat header.html.fragment $< footer.html.fragment > $@

clean:
	rm -f $(TARGETS)

.PHONY: all clean

