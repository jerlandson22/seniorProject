import tkinter as tk
import frames.functions.allFunctions
func = frames.functions.allFunctions


class searchFrame(tk.Frame):
    def __init__(self, parent, controller):  # Initialize the class
        tk.Frame.__init__(self, parent)
        self.controller = controller  # Get controller
        self.configure(background="#002855")

        v = tk.StringVar()
        calc = tk.StringVar()

        options = ["Super Smash Bros.", "Rocket League", "League of Legends", "Overwatch"]  # Strings to select games
        # variables = ["Player", "Team", ]

        headingLabel = tk.Label(self,  # Heading label
                                text="Mount Esports Database",
                                font=("Terminal", 45, "bold"),
                                foreground="#ffffff",
                                background="#002855"
                                )

        # Search selection

        # GAMES

        gameLabel = tk.Label(self,  # Choose game title
                             text="Choose a game",
                             font=("Terminal", 20, "bold"),
                             foreground="#ffffff",
                             background="#002855"
                             )

        gameMenu = tk.OptionMenu(self,  # Game option menu
                                 v,
                                 *options)

        gameMenu.config(font=("Terminal", 12, "bold"),  # Configure the style of the game options
                        foreground="#ffffff",
                        background="#002855")
        v.set(options[0])  # Default option set to Super Smash Bros.

        # Variables

        varLabel = tk.Label(self,
                            text="Variables",
                            font=("Terminal", 20, "bold"),
                            foreground="#ffffff",
                            background="#002855")

        playerButton = tk.Checkbutton(self,
                                      text="Player",
                                      font=("Terminal", 14, "bold"),
                                      foreground="#ffffff",
                                      background="#002855"
                                      )

        teamButton = tk.Checkbutton(self,
                                    text="Team",
                                    font=("Terminal", 14, "bold"),
                                    foreground="#ffffff",
                                    background="#002855"
                                    )

        # Calculations

        calcLabel = tk.Label(self,
                             text="Calculations",
                             font=("Terminal", 20, "bold"),
                             foreground="#ffffff",
                             background="#002855")

        wrButton = tk.Checkbutton(self,
                                  text="Win Rate",
                                  font=("Terminal", 12, "bold"),
                                  foreground="#ffffff",
                                  background="#002855",
                                  variable=calc,
                                  onvalue="""""",
                                  command=lambda: func.winRate
                                  )

        avButton = tk.Checkbutton(self,
                                  text="Average",
                                  font=("Terminal", 12, "bold"),
                                  foreground="#ffffff",
                                  background="#002855",
                                  variable=calc,
                                  onvalue="""""",
                                  command=lambda: func.average
                                  )

        maButton = tk.Checkbutton(self,
                                  text="Most Appearing",
                                  font=("Terminal", 12, "bold"),
                                  foreground="#ffffff",
                                  background="#002855",
                                  variable=calc,
                                  onvalue="""""",
                                  command=lambda: func.mAppear
                                  )

        # Bottom Layer of Screen

        searchButton = tk.Button(self,  # Search button (Switches to MainMenu Frame)
                                 text="Search",
                                 font=("Terminal", 12, "bold"),
                                 relief="raised",
                                 height=3,
                                 command=lambda: controller.show_frame("resultsFrame") + self.select(v.get())
                                 )

        button = tk.Button(self, text="Go to Main Menu",  # Menu button (Switches to MainMenu Frame)
                           font=("Terminal", 12, "bold"),
                           relief="raised",
                           height=3,
                           command=lambda: controller.show_frame("MainMenu"))

        # Pack the Search frame with the widgets created
        headingLabel.pack(pady=25, padx=5)

        # Games section packed
        gameLabel.pack(pady=10)
        gameMenu.pack(pady=5)

        # Variables section packed
        varLabel.pack(pady=10)
        playerButton.pack(pady=5)
        teamButton.pack(pady=5)

        # Calculations section packed
        calcLabel.pack(pady=10)
        wrButton.pack(pady=5)
        avButton.pack(pady=5)
        maButton.pack(pady=5)

        # Bottom Layer of Screen

        button.pack(side="bottom", pady=15)
        searchButton.pack(side="bottom", pady=20)

        # Connect to the SQL Database

    def select(self, db):
        return func.select(func.dbConnect(), db)