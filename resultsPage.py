import tkinter as tk
import frames.functions.allFunctions

func = frames.functions.allFunctions


class resultsFrame(tk.Frame):
    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        self.controller = controller
        self.configure(background="#002855")

        # HEADING

        headingLabel = tk.Label(self,
                                text="Mount Esports Database",
                                font=("Terminal", 45, "bold"),
                                foreground="#ffffff",
                                background="#002855"
                                )

        # DISPLAY RESULTS

        resultsLabel = tk.Label(self,
                                text=func.results,
                                font=("Helvetica", 12),
                                foreground="#ffffff",
                                background="#002855"
                                )

        # BOTTOM LAYER

        backButton = tk.Button(self,
                               text="Back to Search",
                               font=("Terminal", 12, "bold"),
                               relief="raised",
                               height=3,
                               command=lambda: controller.show_frame("searchFrame")
                               )

        menuButton = tk.Button(self,
                               text="Go to Main Menu",
                               font=("Terminal", 12, "bold"),
                               relief="raised",
                               height=3,
                               command=lambda: controller.show_frame("MainMenu"))

        # Heading
        headingLabel.pack(pady=25, padx=5)

        # Results Label
        resultsLabel.pack(pady=25)

        # Bottom Layer of Screen
        menuButton.pack(side="bottom", pady=25)
        backButton.pack(side="bottom", pady=30)
