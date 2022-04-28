import tkinter as tk
import os


class formFrame(tk.Frame):
    def __init__(self, parent, controller):  # Initialize the class
        tk.Frame.__init__(self, parent)
        self.controller = controller
        self.configure(background="#002855")

        headingLabel = tk.Label(self,
                                text="Mount Esports Database",
                                font=("Terminal", 45, "bold"),
                                foreground="#ffffff",
                                background="#002855"
                                )

        # Buttons to direct user to HTML Documents

        ssbuButton = tk.Button(self,
                               text="Super Smash Bros. Data Form",
                               font=("Terminal", 12, "bold"),
                               relief="raised",
                               height=3,
                               command=lambda: self.openFile("ssbuForm.html"))

        rlButton = tk.Button(self,
                             text="Rocket League Data Form",
                             font=("Terminal", 12, "bold"),
                             relief="raised",
                             height=3,
                             command=lambda: self.openFile("rlForm.html"))

        lolButton = tk.Button(self, text="League of Legends Data Form",
                              font=("Terminal", 12, "bold"),
                              relief="raised",
                              height=3,
                              command=lambda: self.openFile("lolForm.html"))

        owButton = tk.Button(self, text="Overwatch Data Form",
                             font=("Terminal", 12, "bold"),
                             relief="raised",
                             height=3,
                             command=lambda: self.openFile("owForm.html"))

        menuButton = tk.Button(self, text="Go to Main Menu",
                               font=("Terminal", 12, "bold"),
                               relief="raised",
                               height=3,
                               command=lambda: controller.show_frame("MainMenu"))

        # Pack all of the widgets onto the Form Frame

        headingLabel.pack(pady=25, padx=5)

        # HTML Forms

        ssbuButton.pack(pady=25)
        rlButton.pack(pady=25)
        lolButton.pack(pady=25)
        owButton.pack(pady=25)

        # Bottom Layer

        menuButton.pack(side="bottom", pady=50)

    def openFile(self, path):
        os.startfile(os.path.join(os.getcwd() + "\\frames\\forms", path))
