import tkinter as tk
import os


class docFrame(tk.Frame):
    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        self.controller = controller
        self.configure(background="#002855")

        headingLabel = tk.Label(self,
                                text="Mount Esports Database",
                                font=("Terminal", 45, "bold"),
                                foreground="#ffffff",
                                background="#002855"
                                )

        # Document Button

        docButton = tk.Button(self,
                              text="Documentation",
                              font=("Terminal", 12, "bold"),
                              relief="raised",
                              height=3,
                              command=lambda: self.openFile("\\frames\\document\\documentation.docx")
                              )

        button1 = tk.Button(self,
                            text="Go to Main Menu",
                            font=("Terminal", 12, "bold"),
                            relief="raised",
                            height=3,
                            command=lambda: controller.show_frame("MainMenu"))

        # Widgets

        headingLabel.pack(pady=25, padx=5)
        docButton.pack(pady=150)
        button1.pack(side="bottom", pady=50)

    def openFile(self, path):
        # Get File path of document
        os.startfile(os.path.join(os.getcwd(), path))
