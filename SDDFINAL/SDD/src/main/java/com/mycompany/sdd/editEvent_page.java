package com.mycompany.sdd;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;
import java.nio.file.*;

public class editEvent_page extends JFrame {
    
    //storing the image path as a viarable, storing the name, and checking
    //if its currently beinf edited.
    private String imagePath = ""; 
    private String originalImageName = ""; 
    private boolean isEditing = false;  // boolean flag thing to track if we're editing

    // the constructor for creating new events
    public editEvent_page(String role) {
        this(role, "", "", "", "", null);
        isEditing = false;
    }

    // the constructor for editing existing events!!
    
    public editEvent_page(String role, String eventName, String eventDate, 
                         String eventLocation, String eventCapacity, Icon eventImage) {
        setTitle(isEditing ? "Edit Event" : "Create New Event");
        setSize(800, 700);
        
        //setting the grids out for the page
        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(6, 2, 10, 10));

        // input boxes for the thingies WHATS THE WORD
        //the fields
        
        panel.add(new JLabel("Event Name:"));
        JTextField eventName_input = new JTextField(eventName);
        panel.add(eventName_input);
        
        panel.add(new JLabel("Date (DD/MM/YYYY):"));
        JTextField eventDate_input = new JTextField(eventDate);
        panel.add(eventDate_input);
        
        panel.add(new JLabel("Location:"));
        JTextField eventLocation_input = new JTextField(eventLocation);
        panel.add(eventLocation_input);
        
        panel.add(new JLabel("Capacity:"));
        JTextField eventCapacity_input = new JTextField(eventCapacity);
        panel.add(eventCapacity_input);
        
        // handling images. 
        panel.add(new JLabel("Event Image:"));//label for image box
        JPanel imagePanel = new JPanel(new FlowLayout(FlowLayout.LEFT));
        JButton browseBtn = new JButton("Browse");//browse button to choose image
        JLabel imageLabel = new JLabel("No image selected");
        
        // showing the current image text if there is an image selected
        if (eventImage != null) {//IF there is am image selected
            imageLabel.setIcon(eventImage);
            imageLabel.setText("Current image");//to show therws an image there.
            originalImageName = eventCapacity; 
        }
        
        //adding the image panels.
        imagePanel.add(browseBtn);
        imagePanel.add(imageLabel);
        panel.add(imagePanel);
        
        // handling the user sleection of the image
        
        
browseBtn.addActionListener(e -> {
    JFileChooser fileChooser = new JFileChooser();//calling the import file chooser
    
    //setting a filter to only show files that have these extwensions on it- to ensure onyl images can be chosen.
    fileChooser.setFileFilter(new javax.swing.filechooser.FileNameExtensionFilter(
        "Image files", "jpg", "jpeg", "png", "gif"));
    
    //idk thisw yet need to look up- 
    if (fileChooser.showOpenDialog(this) == JFileChooser.APPROVE_OPTION) {
        File selectedFile = fileChooser.getSelectedFile();
        imagePath = selectedFile.getAbsolutePath();
        imageLabel.setText(selectedFile.getName());
        
        // preview image after chosen
        ImageIcon originalIcon = new ImageIcon(imagePath);
        //scaling thr current image to be small for the preview
        Image scaledImage = originalIcon.getImage().getScaledInstance(
            100, 100, Image.SCALE_SMOOTH);
        ImageIcon icon = new ImageIcon(scaledImage);
        imageLabel.setIcon(icon);//setting the image there
    }
});

        // all the buttons like cancel and save
        JPanel bottom = new JPanel();
        JButton save = new JButton(isEditing ? "Update" : "Save");
        JButton cancel = new JButton("Cancel");
        bottom.add(save);
        bottom.add(cancel);

        save.addActionListener(e -> {
            // validating that there is an imput for everything else a message shows up
            if (eventName_input.getText().isEmpty() || 
                eventDate_input.getText().isEmpty() || 
                eventLocation_input.getText().isEmpty()) {
                JOptionPane.showMessageDialog(this, 
                    "Please fill required fields", 
                    "Error", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // checking if there was an image added to add the pop up
            //for the person thing
            //so if an image IS added when you press save a pop up comws up saying yk gdpr
            if (!imagePath.isEmpty()) {
                int response = JOptionPane.showConfirmDialog(this,
                    "-WARNING- There is a single person in this image. This could breach GDPR rules.\nContinue saving event?",
                    "GDPR Warning", JOptionPane.YES_NO_OPTION);
                
                if (response != JOptionPane.YES_OPTION) {
                    return; 
                }
            }
            
            // saving to the file
            try {
                //IF the image directory doesnt exist this creates it
                File imagesDir = new File("event_images");
                if (!imagesDir.exists()) {
                    imagesDir.mkdirs();
                }

                // this saves the image and handles it
                String imageName = originalImageName; // keep original name if no new image selected
                if (!imagePath.isEmpty()) {
                    File source = new File(imagePath);
                    //idk
                    imageName = "event_" + System.currentTimeMillis() + 
                               imagePath.substring(imagePath.lastIndexOf("."));
                    
                    
                    
                    //NEED TO LOOK UP IDK THIS
                    Path targetPath = Paths.get(imagesDir.getPath(), imageName);
                    Files.copy(source.toPath(), targetPath, StandardCopyOption.REPLACE_EXISTING);
                    
                    // Delete old image if editing and image was changed
                    if (isEditing && !originalImageName.isEmpty()) {
                        File oldImage = new File(imagesDir, originalImageName);
                        if (oldImage.exists()) {
                            oldImage.delete();
                        }
                    }
                }

                //saving the evnt data 
                if (isEditing) {
                    // rewriting the file woth all the fields cos its just easier
                    updateEventInFile(
                        eventName, eventDate, eventLocation, eventCapacity,
                        eventName_input.getText(),
                        eventDate_input.getText(),
                        eventLocation_input.getText(),
                        eventCapacity_input.getText(),
                        imageName
                    );
                } else {
                    // adding instead of like rewriting for new events cos yk theyre new
                    try (FileWriter writer = new FileWriter("events.txt", true)) {
                        writer.write(String.join(",",
                            eventName_input.getText(),
                            eventDate_input.getText(),
                            eventLocation_input.getText(),
                            eventCapacity_input.getText(),
                            imageName
                        ) + "\n");
                    }
                }
//message if the evebt was saved successfully confirmstion!!
                JOptionPane.showMessageDialog(this, 
                    isEditing ? "Event updated successfully!" : "Event saved successfully!");
                new viewEvent_page(role).setVisible(true);
                dispose();
                
                
                //iof it catches any exceptions then yeah sends error message
            } catch (IOException ex) {
                JOptionPane.showMessageDialog(this,
                    "Error saving event: " + ex.getMessage(),
                    "Error", JOptionPane.ERROR_MESSAGE);
                ex.printStackTrace();
            }
        });

        //if you press cancel it tskes you bsvk
        cancel.addActionListener(e -> {
            new viewEvent_page(role).setVisible(true);
            dispose();
        });

        
        //adding the centre and south panels
        add(panel, BorderLayout.CENTER);
        add(bottom, BorderLayout.SOUTH);
    }

    //method to update the event files
    
    //creatinf a temp file to save things in 
    private void updateEventInFile(String oldName, String oldDate, String oldLocation, 
                                 String oldCapacity, String newName, String newDate, 
                                 String newLocation, String newCapacity, String newImage) 
                                 throws IOException {
        File originalFile = new File("events.txt");
        File tempFile = new File("events_temp.txt");

        //reading from the old file and writinf it to the new temp file,
        try (BufferedReader reader = new BufferedReader(new FileReader(originalFile));
             BufferedWriter writer = new BufferedWriter(new FileWriter(tempFile))) {

            String line;
            while ((line = reader.readLine()) != null) {
                String[] parts = line.split(",", -1);
                if (parts.length >= 4 && 
                    parts[0].equals(oldName) && 
                    parts[1].equals(oldDate) && 
                    parts[2].equals(oldLocation) && 
                    parts[3].equals(oldCapacity)) {
                    // this is the line to update
                    writer.write(String.join(",",
                        newName,
                        newDate,
                        newLocation,
                        newCapacity,
                        newImage
                    ) + "\n");
                } else {
                    
                    //sorry idk after this im tired
                    writer.write(line + "\n");
                }
            }
        }

        
        if (!originalFile.delete()) {
            throw new IOException("Could not delete original file");
        }
        
        if (!tempFile.renameTo(originalFile)) {
            throw new IOException("Could not rename temp file");
        }
    }
}