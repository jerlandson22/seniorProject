import frames.formPage
import frames.searchPage
import frames.docPage
import frames.resultsPage
import frames.functions.allFunctions
import tkinter as tk

# Frames classes from the Frames folder
formFrame = frames.formPage.formFrame
searchFrame = frames.searchPage.searchFrame
docFrame = frames.docPage.docFrame
resultsFrame = frames.resultsPage.resultsFrame
func = frames.functions.allFunctions


class App(tk.Tk):
    def __init__(self, *args, **kwargs):
        tk.Tk.__init__(self, *args, **kwargs)

        # Initialize frames
        containFrames = tk.Frame(self)
        containFrames.pack(side="top", fill="both", expand=True)
        containFrames.grid_rowconfigure(0, weight=1)
        containFrames.grid_columnconfigure(0, weight=1)

        self.frames = {}

        # Go through each Frame and select one at a time
        for F in (MainMenu, formFrame, searchFrame, docFrame, resultsFrame):
            page_name = F.__name__
            frame = F(parent=containFrames, controller=self)
            self.frames[page_name] = frame

            frame.grid(row=0, column=0, sticky="nsew")
        # Shows the MainMenu Frame
        self.show_frame("MainMenu")

    def show_frame(self, page_name):
        # Display each Frame by by using tkraise()
        frame = self.frames[page_name]
        frame.tkraise()


class MainMenu(tk.Frame):

    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent, bg="#002855")
        self.controller = controller
        self.configure(background="#002855")
        self.controller.title("Mount Esports Database")  # Set the title in on the entire App
        self.controller.state("zoomed")  # Set the start state of the entire App
        self.controller.iconphoto(False, tk.PhotoImage(file='Icon/mountIcon.png'))  # Set the Icon of the entire App

        headingLabel = tk.Label(self,
                                text="Mount Esports Database",
                                font=("Terminal", 45, "bold"),
                                foreground="#ffffff",
                                background="#002855"
                                )

        image = tk.PhotoImage(file='Icon/mountIcon.png')
        imageLabel = tk.Label(self, image=image)

        button1 = tk.Button(  # Information for Form button
            self,
            text="Forms",
            font=("Terminal", 12, "bold"),
            relief="raised",
            height=3,
            command=lambda: controller.show_frame("formFrame")
        )

        button2 = tk.Button(  # Information for Search button
            self,
            text="Search Player",
            font=("Terminal", 12, "bold"),
            relief="raised",
            height=3,
            command=lambda: controller.show_frame("searchFrame")
        )

        button3 = tk.Button(  # Information for Documentation button
            self,
            text="Documentation",
            font=("Terminal", 12, "bold"),
            relief="raised",
            height=3,
            command=lambda: controller.show_frame("docFrame")
        )

        # Pack each widget
        headingLabel.pack(pady=25, padx=5)
        imageLabel.pack(pady=20)
        imageLabel.image = image
        button1.pack(pady=20)
        button2.pack(pady=20)
        button3.pack(pady=20)


if __name__ == "__main__":
    app = App()  # Run the app
    app.mainloop()  # Keep on a loop until the user quits the program
