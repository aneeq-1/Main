/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.sdd;
import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.*;
import java.io.*;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
/**
 *
 * @author imahmo26
 */
public class viewAnalytics_page extends JFrame{
    
        private DefaultTableModel tableModel;
        private JTable table;
    
        public viewAnalytics_page() {
        // setting up thr grids for the page.
        setTitle("View Analytics");
        setSize(800, 400);
        setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        // defining what columns are going to be shown on the table
        String[] columnNames = { "Event Name","Satisfied Attendees/Attendees", "Most popular mode of Transport", "Attendees" };
        DefaultTableModel tableModel = new DefaultTableModel(columnNames, 0);
        JTable table = new JTable(tableModel);
        //making it a scrollable panel
        JScrollPane scrollPane = new JScrollPane(table);

        // loading all the analytics from the file
        loadAnalyticsFromFile(tableModel);

        // the buttons like close etc
        JPanel buttonPanel = new JPanel();
        JButton closeBtn = new JButton("Close");
        closeBtn.addActionListener(e -> dispose());
        buttonPanel.add(closeBtn);

        // adding the panel components to the page the middle and bottom
        getContentPane().add(scrollPane, BorderLayout.CENTER);
        getContentPane().add(buttonPanel, BorderLayout.SOUTH);
    }

    // loading the analytics from the file and putting them in the table on this page
    private void loadAnalyticsFromFile(DefaultTableModel tableModel) {
        tableModel.setRowCount(0); 
        //reading from analytics.txt
        try (BufferedReader reader = new BufferedReader(new FileReader("analytics.txt"))) {
            String line;
            while ((line = reader.readLine()) != null) {
                String[] analyticsParts = line.split(",", -1);
                if (analyticsParts.length == 3) {
                    //adding a row to the table for the new analytics
                    tableModel.addRow(analyticsParts);
                }
            }
            
            //any errors that are caught,
        } catch (IOException e) {
            JOptionPane.showMessageDialog(this,
                    "Error reading analytics file.",
                    "Error", JOptionPane.ERROR_MESSAGE);
        }
    }
}