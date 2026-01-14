/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;
import javax.swing.*;
import java.awt.*;
import java.io.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
/**
 *
 * @author imahmo26
 */
public class editAnalytics_page extends JFrame {
        
    public editAnalytics_page() {

        //setting the frame and the size
        setTitle("Edit Analytics");
        setSize(800, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        //grid layouts for the page
        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(5, 2, 10, 10));

        
        //event NAME input box.
        JLabel eventLabel = new JLabel("Event: ");
        JTextField eventInput = new JTextField();
        panel.add(eventLabel);
        panel.add(eventInput);
        
        //attandees satisfaction input box
        JLabel satisfactionLabel = new JLabel("Satisfied Attendees/Attendees: ");
        JTextField satisfactionInput = new JTextField();
        panel.add(satisfactionLabel);
        panel.add(satisfactionInput);

        //transport input box
        JLabel transportLabel = new JLabel("Most popular mode of Transport: ");
        JTextField transportInput = new JTextField();
        panel.add(transportLabel);
        panel.add(transportInput);

        //attendance input box
        JLabel attendanceLabel = new JLabel("Attendees: ");
        JTextField attendanceInput = new JTextField();
        panel.add(attendanceLabel);
        panel.add(attendanceInput);

        //the SOUTH panel bottom buttons saving or cancelling
        JPanel bottom = new JPanel();
        JButton saveBtn = new JButton("Save");
        JButton cancelBtn = new JButton("Cancel");
        bottom.add(saveBtn);
        bottom.add(cancelBtn);

        //fgetting the content for each panel
        getContentPane().add(panel, BorderLayout.CENTER);
        getContentPane().add(bottom, BorderLayout.SOUTH);

        // saving the content 
        saveBtn.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String satisfaction = satisfactionInput.getText();
                String transport = transportInput.getText();
                String attendance = attendanceInput.getText();

                //input handling to make sure nothing is empty.
                if (satisfaction.isEmpty() || transport.isEmpty() || attendance.isEmpty()) {
                    JOptionPane.showMessageDialog(editAnalytics_page.this,
                            "Please fill in all fields (Satisfaction, Transport, Attendance).",
                            "Missing Info",
                            JOptionPane.WARNING_MESSAGE);
                    return;
                }

                try {
                    //writing the analytics to the snalytics file. saving etc.
                    FileWriter writer = new FileWriter("analytics.txt", true);
                    writer.write(satisfaction + "," + transport + "," + attendance + "\n");
                    writer.close();
                    //message to confirm its been saved.
                    JOptionPane.showMessageDialog(editAnalytics_page.this, "Analytics saved successfully.");
                    
                    // after saving sending back to the view analytics page.
                    viewAnalytics_page viewPage = new viewAnalytics_page();
                    viewPage.setVisible(true);
                    dispose();
                    
                    //incase an exception is apparent, says error message.
                } catch (IOException ex) {
                    JOptionPane.showMessageDialog(editAnalytics_page.this,
                            "Failed to save analytics.",
                            "Error",
                            JOptionPane.ERROR_MESSAGE);
                }
            }
        });

        // cancel button closes the window without saving
        cancelBtn.addActionListener(e -> dispose());
    }
}
