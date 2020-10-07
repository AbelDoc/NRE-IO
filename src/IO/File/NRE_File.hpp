
    /**
     * @file NRE_File.hpp
     * @brief Declaration of IO's API's Object : File
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include <iostream>
    #include <fstream>

    #include <Header/NRE_Core.hpp>

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @class File
             * @brief Manage a file path and ensure that's the file exist before accessing it
             */
            class File {
                private:    //Fields
                    Core::String path;   /**< The file's path */

                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default constructor
                         */
                        File() = default;
                        /**
                         * Construct a File with the given path
                         * @param p the file's path
                         */
                        File(Core::String const& p);
                        /**
                         * Construct a File from a char array for compatibility
                         * @param p the char array
                         */
                        File(char const p[]);

                    //## Copy-Constructor ##//
                        /**
                         * Copy f into this
                         * @param f the file to copy
                         */
                        File(File const& f) = default;

                    //## Move-Constructor ##//
                        /**
                         * Move f into this
                         * @param f the file to move
                         */
                        File(File && f) = default;

                    //## Deconstructor ##//
                        /**
                         * File Deconstructor
                         */
                        ~File() = default;

                    //## Getter ##//
                        /**
                         * @return the file's path
                         */
                        Core::String const& getPath() const;

                    //## Setter ##//
                        /**
                         * Set the file's path
                         * @param p the new file's path
                         */
                        void setPath(Core::String const& p);

                    //## Methods ##//
                        /**
                         * Open the file with standard lib and test if it open correctly
                         * @return the test's result
                         */
                        bool exist() const;

                    //## Assignment Operator ##//
                        /**
                         * Copy assignment of f into this
                         * @param f the file to copy into this
                         * @return      the reference of himself
                         */
                        File& operator =(File const& f) = default;
                        /**
                         * Move assignment of f into this
                         * @param f the file to move into this
                         * @return      the reference of himself
                         */
                        File& operator =(File && f) = default;

                    //## Arithmetic Operator ##//
                        /**
                         * Compute the string with the file path and s concatenated
                         * @param s the string to add
                         * @return  the concatenated string
                         */
                        Core::String operator +(Core::String const& s) const;
                        /**
                         * Compute the file resulting in the concatenation of 2 file path
                         * @return the computed file
                         */
                        File operator +(File const& f) const;

                    //## Stream Operator ##//
                        /**
                         * Convert the file into a string
                         * @return the converted file
                         */
                        Core::String const& toString() const;

            };

            /**
             * Output stream operator for the object
             * @param  stream the stream to add the object's string representation
             * @param  o      the object to add in the stream
             * @return the    modified stream
             */
            std::ostream& operator <<(std::ostream& stream, File const& o);
        }
    }

    #include "NRE_File.tpp"
