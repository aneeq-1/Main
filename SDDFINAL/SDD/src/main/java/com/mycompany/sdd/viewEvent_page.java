/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;

import javax.swing.*;
import java.awt.*;
import java.io.*;
import javax.swing.table.DefaultTableModel;
import java.util.Arrays;

public class viewEvent_page extends JFrame {

    
    //method for the dark mode settings 
    //not moving it from here because the code works and im scared to change it
       private static void setSimpleDarkMode() {
    UIManager.put("Panel.background", Color.DARK_GRAY);
    UIManager.put("Label.foreground", Color.WHITE);
    UIManager.put("Label.background", Color.DARK_GRAY);
    UIManager.put("Button.background", new Color(80, 80, 80));
    UIManager.put("Button.foreground", Color.DARK_GRAY);
    UIManager.put("TextField.background", new Color(70, 70, 70));
    UIManager.put("TextField.foreground", Color.WHITE);
    UIManager.put("TextArea.background", new Color(70, 70, 70));
    UIManager.put("TextArea.foreground", Color.WHITE);
    UIManager.put("Table.background", new Color(60, 60, 60));
    UIManager.put("Table.foreground", Color.WHITE);
    UIManager.put("TableHeader.background", new Color(80, 80, 80));
    UIManager.put("TableHeader.foreground", Color.WHITE);
    UIManager.put("ScrollPane.background", Color.DARK_GRAY);
    UIManager.put("Viewport.background", Color.DARK_GRAY);
}
    
    
    public viewEvent_page(String role) {
        
        setSimpleDarkMode(); //calling the dark mode settings to be used
        setTitle("View All Events");
        setSize(1000, 400); 
        setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        //creating the table defining columnbs for the event data
        String[] columnNames = {"Event Name", "Date", "Location", "Capacity", "Image"};
        DefaultTableModel tableModel = new DefaultTableModel(columnNames, 0) {
            @Override
            public Class<?> getColumnClass(int columnIndex) {
                return columnIndex == 4 ? Icon.class : Object.class;
            }
            
            @Override
            public boolean isCellEditable(int row, int column) {
                return false; // making sure you cant edit the cells
            }
        };
        
        
       //setting the size settings for the table
        JTable table = new JTable(tableModel);
        table.setRowHeight(60); 
        //making the table scrollable
        JScrollPane scrollPane = new JScrollPane(table);

        //loading all events from the file
        loadEventsFromFile(tableModel);

        //the buttons like close
        JPanel buttonPanel = new JPanel();
        JButton closeBtn = new JButton("Close");
        closeBtn.addActionListener(e -> dispose());
        buttonPanel.add(closeBtn);

        //the delete button
        if (hasDeletePermission(role)) {
            JButton deleteBtn = new JButton("Delete Selected");
            deleteBtn.addActionListener(e -> deleteSelectedEvent(table, tableModel));
            buttonPanel.add(deleteBtn);
            
            //the edit button
            JButton editBtn = new JButton("Edit Selected");
            editBtn.addActionListener(e -> editSelectedEvent(table, role));
            buttonPanel.add(editBtn);
        }

        //adding the components to the page
        getContentPane().add(scrollPane, BorderLayout.CENTER);
        getContentPane().add(buttonPanel, BorderLayout.SOUTH);
    }

    
    //ensuring only the correct roles have right [permissionms
    //deleting permission only goes to SM DIGM AC DIGL etc.
    private boolean hasDeletePermission(String role) {
        return role != null && (role.equalsIgnoreCase("SM") || role.equalsIgnoreCase("SA") 
                || role.equalsIgnoreCase("DIGL") || role.equalsIgnoreCase("DIGM") 
                || role.equalsIgnoreCase("AC"));
    }

    
    //method to load the evnt fromthe file and put them in th table.
    private void loadEventsFromFile(DefaultTableModel tableModel) {
        File eventsFile = new File("events.txt");
        if (!eventsFile.exists()) {
            
            //if there isnt any events found.
            JOptionPane.showMessageDialog(this,
                    "No events found.",
                    "Information", JOptionPane.INFORMATION_MESSAGE);
            return;
        }

        
        try (BufferedReader reader = new BufferedReader(new FileReader(eventsFile))) {
            String line;
            while ((line = reader.readLine()) != null) {
                String[] eventParts = line.split(",", -1);
                if (eventParts.length >= 4) {  // at least 4 required fields
                    
                    // handling image if it EXISTS
                    Icon imageIcon = null;
                    if (eventParts.length >= 5 && !eventParts[4].isEmpty()) {
                        String imagePath = "event_images/" + eventParts[4];
                        if (new File(imagePath).exists()) {
                            //scaling the image
                            imageIcon = new ImageIcon(new ImageIcon(imagePath).getImage()
                                    .getScaledInstance(50, 50, Image.SCALE_SMOOTH));
                        }
                    }
                    
                    // add the row with the image icon added toooo omg
                    tableModel.addRow(new Object[]{
                        eventParts[0], //event Name
                        eventParts[1], //date of event
                        eventParts[2], //location of event
                        eventParts[3], //capacity of the evnt
                        imageIcon      //image of the evnt
                    });
                }
            }
            //any errors yk by now
        } catch (IOException e) {
            JOptionPane.showMessageDialog(this,
                    "Error reading events file: " + e.getMessage(),
                    "Error", JOptionPane.ERROR_MESSAGE);
        }
    }

    //method to delete the selected event
    private void deleteSelectedEvent(JTable table, DefaultTableModel tableModel) {
        int selectedRow = table.getSelectedRow();
        if (selectedRow == -1) {//this doesnt show up so not needed but scared to mess w code.
            JOptionPane.showMessageDialog(this, "Please select a row to delete.");
            return;
        }

        //this just to ensure the user wants tyo delete the evnt
        int confirm = JOptionPane.showConfirmDialog(this,
                "Are you sure you want to delete this event?",
                "Confirm Deletion", JOptionPane.YES_NO_OPTION);
        
        if (confirm != JOptionPane.YES_OPTION) {
            return;
        }

        //defining all these thngs s variables
        String eventName = (String) tableModel.getValueAt(selectedRow, 0);
        String eventDate = (String) tableModel.getValueAt(selectedRow, 1);
        String eventLocation = (String) tableModel.getValueAt(selectedRow, 2);
        String eventCapacity = (String) tableModel.getValueAt(selectedRow, 3);

        // deleteing the variables from the file if selected
        if (deleteEventFromFile(eventName, eventDate, eventLocation, eventCapacity)) {
            // Remove from table
            tableModel.removeRow(selectedRow);
            JOptionPane.showMessageDialog(this, "Event deleted successfully.");
        } else {
            //this comes up if an eventy is saved weirdly or something
            JOptionPane.showMessageDialog(this, "Failed to delete event from file.");
        }
    }

    //SAME THING but for editing
    private void editSelectedEvent(JTable table, String role) {
        int selectedRow = table.getSelectedRow();
        if (selectedRow == -1) {
            JOptionPane.showMessageDialog(this, "Please select a row to edit.");
            return;
        }

        // getting all event data from the selected row
        String eventName = (String) table.getValueAt(selectedRow, 0);
        String eventDate = (String) table.getValueAt(selectedRow, 1);
        String eventLocation = (String) table.getValueAt(selectedRow, 2);
        String eventCapacity = (String) table.getValueAt(selectedRow, 3);
        Icon eventImage = (Icon) table.getValueAt(selectedRow, 4);

        // oprning the edit dialog?? idk what that is but yeh
        editEvent_page editPage = new editEvent_page(role, eventName, eventDate, 
                eventLocation, eventCapacity, eventImage);
        editPage.setVisible(true);
        dispose();
    }
// i cant after this use your common sense
    private boolean deleteEventFromFile(String name, String date, String location, String capacity) {
        File originalFile = new File("events.txt");
        File tempFile = new File("events_temp.txt");

        try (BufferedReader reader = new BufferedReader(new FileReader(originalFile));
             BufferedWriter writer = new BufferedWriter(new FileWriter(tempFile))) {

            String line;
            boolean found = false;
            while ((line = reader.readLine()) != null) {
                String[] parts = line.split(",", -1);
                if (parts.length >= 4 && 
                    parts[0].equals(name) && 
                    parts[1].equals(date) && 
                    parts[2].equals(location) && 
                    parts[3].equals(capacity)) {
                    found = true;
                    continue; // Skip writing this line
                }
                writer.write(line);
                writer.newLine();
            }

            if (!found) {
                JOptionPane.showMessageDialog(this, "Event not found in file.");
                return false;
            }

        } catch (IOException e) {
            JOptionPane.showMessageDialog(this, 
                "Error updating events file: " + e.getMessage(), 
                "Error", JOptionPane.ERROR_MESSAGE);
            return false;
        }

        // replacing the original file with the new temporsry file,
        if (!originalFile.delete()) {
            JOptionPane.showMessageDialog(this, 
                "Could not delete original file.", 
                "Error", JOptionPane.ERROR_MESSAGE);
            return false;
        }
        
        if (!tempFile.renameTo(originalFile)) {
            JOptionPane.showMessageDialog(this, 
                "Could not rename temp file.", 
                "Error", JOptionPane.ERROR_MESSAGE);
            return false;
        }

        return true;
    }
}